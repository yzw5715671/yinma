<?php
// +----------------------------------------------------------------------
// | Author: yanzhiwei <yanzhiwei111@163.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Think\Controller;
use Think\Log;
/**
 * 项目打款类
 */
class PropayController extends AdminController {

	//初始化
	public function __construct(){
		parent::__construct();

		require_once(APP_PATH.'BaoyiPay/shaHelper.php');
	}

	//获取已打款的项目记录
	public function paymoneylist(){
		// $uid = is_login();

		//众筹成功的项目
		$where = array('status' => array('eq', '9'),'stage'=>array('eq',9));
		$order = array('update_time desc');
		$p_stage ='众筹成功的项目';

		$list = M('Project')->where($where)->order($order)->select();
		int_to_string($list, array('stage'=>array(0=>'审核已通过',1=>'预热阶段',2=>'认投阶段',3=>'推选领投人阶段',4=>'合投阶段', 5=>'等待付款', 9=>'完成', 10=>'认购阶段')));
		
		$this->p_stage = $p_stage;
		$this->_list = $list;
		$this->display();
	}

	//打款页面
	public function paymoney(){

		$this->display();
	}

	//打款操作
	public function dopaymoney(){
		//获取代付配置
		$this->config = C('PAID_PAY');

		$params = $_POST;
		$params = array(
			'pro_id'=>'351',
			'bankName'=>'中国建设银行',
			'accountNo'=>'6217000010002065409',
			'accountName'=>'闫志伟',
			'accountType'=>'02',
			'tranAmt'=>1.01,
			'curType'=>'CNY',
			'bsnType'=>'09400',
			// 'openProvince'=>'北京',
			// 'openCity'=>'昌平',
			// 'openName'=>'',
			// 'certType'=>'01',
			// 'certNo'=>'142431199206170313',
			// 'mobilePhone'=>'18612334831',
		);

		//拼装传参
		$time = NOW_TIME;
		$tradFlowNo = $this->config['MERCHANTNO'].time_format($time,'Ymd').substr(floor(microtime($time) * 1000),-6);
		//head文件
		$head = array(
				'version'=>'1.0.0', //版本号
				'msgtype'=>'0001',//请求报文：0001
				'channelno'=>'99', //渠道代号固定“99”
				'merchantno'=>$this->config['MERCHANTNO'], //第三方商户
				'trandate'=>time_format($time,'Ymd'), //交易日期，格式：YYYYMMDD 如：20120628
				'trantime'=>time_format($time,'His'),//交易时间，格式：HHMMSS 如：142356
				'bussflowno'=>$tradFlowNo, //交易流水规则：商户号+ YYYYMMDDHHMMSS+6位流水号
				'trancode'=>'CP0027'); //交易代码 CP0027 CP0006
			
		//body文件
		$body = array(
				'merPlatAcctAlias'=>'',//平台开立的账户账号别名，当商户开立多个账户时，必输
				'protocolNo'=>'',//商户开通协议验证后必输
				'bankName'=>$params['bankName'],//付款银行账户银行名称
				'accountNo'=>$params['accountNo'],//银行卡或存折号码 32位
				'accountName'=>$params['accountName'],//银行卡或存折上的所有人姓名。
				'accountType'=>$params['accountType'],//账户属性01：对公  02：对私
				'tranAmt'=>$params['tranAmt'],//银行卡被扣费的金额,保留小数2位。整数位最大为14位。
				'curType'=>$params['curType'] ? $params['curType'] : 'CNY',//人民币：CNY, 港元：HKD，美元：USD。不填时，默认为人民币。
				'bsnType'=>$params['bsnType'] ? $params['bsnType'] : '09400',//代付的业务类型

				'openProvince'=>$params['openProvince'] ? $params['openProvince'] : '',//填写时，不带"省"或"自治区"CHAR(20)
				'openCity'=>$params['openCity'] ? $params['openCity'] : '',//不带“市”，如长沙，武汉等
				'openName'=>$params['openName'] ? $params['openName'] : '',//银行账户开户所在银行网点的名称。是否输入见支持银行列表要素
				'certType'=>$params['certType'] ? $params['certType'] : '',//01：身份证；02：军官证；03：护照；04: 回乡证；05: 台胞证；06: 警官证；07: 士兵证；99: 其它证件是否输入见支持银行列表要素。
				'certNo'=>$params['certNo'] ? $params['certNo'] : '',//证件号码；是否输入见支持银行列表要素。
				'mobilePhone'=>$params['mobilePhone'] ? $params['mobilePhone'] : '',//客户联系方式
				'prodInfo'=>'',//预留字段
				'remark'=>'',//备注
		);
		$message = array('head'=>$head, 'body'=>$body);
		$xml = to_xmlstring($message);
		$mac = sha256($xml.$this->config['MERKEY']);	//签名

		$post_data = array(
			'xml' => $xml,
			'mac' => $mac,
		);

		$url = $this->config['URL'];

		//记录传过去日志
		Log::write(print_r($post_data, true), 'params', '', LOG_PATH.'/Admin/pay_'.date('y_m_d').'.log');
		$result = request_by_curl($url,$post_data);
		//记录返回日志
		Log::write(print_r($result, true), 'return', '', LOG_PATH.'/Admin/pay_'.date('y_m_d').'.log');
		$result = sha256Response($result, $this->config['MERKEY']);

		$info = xml2arr($result['xml']);
  		$head = $info['head'];
  		$body = $info['body'];

  		//拼装添加数据
  		$add_data = $params;
		$add_data['bussflowno'] = $tradFlowNo;
		$add_data['ac_u_id'] = UID;
		$add_data['createtime'] = NOW_TIME;

  		if($head['respcode'] == 'C000000000'){
  			if($body['tranState'] == '00'){
  				M('Project')->where(array('id'=>$params['pro_id']))->save(array(
  					'pay_money'=>array('exp','pay_money+'.$params['tranAmt']),
  					'pay_status'=>2,
				));

				$add_data['tranState'] = $body['tranState'];
				M('ProjectPayLog')->add($add_data);

  				$this->success('打款申请提交成功', U('paymoneylist'));
  			}else if($body['tranState'] == '02'){
  				M('Project')->where(array('id'=>$params['pro_id']))->save(array(
  					'pay_money'=>array('exp','pay_money+'.$params['tranAmt']),
  					'pay_status'=>3,
				));

				$add_data['tranState'] = $body['tranState'];
				M('ProjectPayLog')->add($add_data);
  				$this->success('打款申请提交正在处理中，请耐心等待返回接口', U('paymoneylist'));
  			}else{

				$add_data['tranState'] = $body['tranState'];
				M('ProjectPayLog')->add($add_data);

  				$this->error('打款申请提交失败');
  			}
  		}else{
			$add_data['tranState'] = '-1';
			M('ProjectPayLog')->add($add_data);

			$this->error('打款申请提交，三方未响应');
  		}
	}
}