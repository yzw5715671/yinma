<?php 
namespace Admin\Controller;

class BaoyiPayApiController extends AdminController {

	public function __construct(){
		parent::__construct();

		require_once(APP_PATH.'BaoyiPay/shaHelper.php');
	}

	//测试
	public function bytest(){
		$xml = '<?xml version="1.0" encoding="UTF-8"?><message><head><version>1.0.0</version><msgtype>0001</msgtype><channelno>99</channelno><merchantno>CF3000037046</merchantno><trandate>20160629</trandate><trantime>181530</trantime><bussflowno>CF300003704620160629181530100005</bussflowno><trancode>CP0020</trancode></head><body><acctNo>CF3000037046</acctNo></body></message>';

		$mac = sha256($xml."449826cf05ca03cb9cbaa0eaf2f7b9ce");

		$post_data = array(
			'xml' => $xml,
			'mac' => $mac,
		);

		$url = 'http://cp.umbpay.com.cn:8086/agentCollPayPlatPre/msgProcess/acceptXmlReq.do';
		$result = request_by_curl($url,$post_data);
		echo $result;
	}
	
}