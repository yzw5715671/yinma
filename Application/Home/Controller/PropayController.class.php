<?php
// +----------------------------------------------------------------------
// | Author: yanzhiwei <yanzhiwei111@163.com>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Log;
/**
 * 民生代付通知类
 */
class PropayController extends HomeController {

	//初始化
	public function __construct(){
		parent::__construct();

		require_once(APP_PATH.'BaoyiPay/shaHelper.php');
	}

	// 服务器对服务器 通知
	public function informurl(){
		$params = I();
		Log::write(print_r($params, true), 'notice params', '', LOG_PATH.'/Admin/Pay/pay_informurl_'.date('y_m_d').'.log');

		$info = xml2arr($params['xml']);
		$body = $info['body'];

		if($head['tranRespCode'] == 'C000000000'){
  			if($body['tranState'] == '01'){
				$add_data['tranState'] = '00';
				M('ProjectPayLog')->where(array('bussflowno'=>$body['orgTranFlow']))->save($add_data);
  			}else{
  				$result = M('ProjectPayLog')->field('pro_id')->where(array('bussflowno'=>$body['orgTranFlow']))->find();
  				M('Project')->where(array('id'=>$result['pro_id']))->save(array(
  					'pay_money'=>array('exp','pay_money-'.$body['tranAmt']),
  					'pay_succ_count'=>array('exp','pay_succ_count-1'),
				));

				$add_data['tranState'] = $body['tranState'];
				M('ProjectPayLog')->where(array('bussflowno'=>$body['orgTranFlow']))->save($add_data);
  			}
  		}else{
  			Log::write(print_r($params, true), 'notice bad', '', LOG_PATH.'/Admin/Pay/pay_informurl_'.date('y_m_d').'.log');
  		}
	}

	// 服务器对服务器 通知(test)
	public function informurl_test(){
		Log::write(print_r($_REQUEST, true), 'request notice params', '', LOG_PATH.'/Admin/Pay/pay_informurl_'.date('y_m_d').'.log');
		$params = I();
		Log::write(print_r($params, true), 'notice params', '', LOG_PATH.'/Admin/Pay/pay_informurl_'.date('y_m_d').'.log');
	}
}