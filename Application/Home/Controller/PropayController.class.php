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
		$params = $_POST;
		Log::write(print_r($params, true), 'notice params', '', LOG_PATH.'/Admin/pay_'.date('y_m_d').'.log');

		$info = xml2arr($params['xml']);
		$body = $info['body'];

		if($head['tranRespCode'] == 'C000000000'){
  			if($body['tranState'] == '01'){
  				M('Project')->where(array('id'=>$params['pro_id']))->save(array(
  					'pay_status'=>2,
				));

				$add_data['tranState'] = '00';
				M('ProjectPayLog')->where(array('bussflowno'=>$body['orgTranFlow']))->save($add_data);
  			}else{
  				M('Project')->where(array('id'=>$params['pro_id']))->save(array(
  					'pay_money'=>array('exp','pay_money-'.$params['tranAmt']),
  					'pay_status'=>4,
				));

				$add_data['tranState'] = $body['tranState'];
				M('ProjectPayLog')->where(array('bussflowno'=>$body['orgTranFlow']))->save($add_data);
  			}
  		}else{
			$add_data['tranState'] = '-1';
			M('ProjectPayLog')->add($add_data);
  		}

	}
}