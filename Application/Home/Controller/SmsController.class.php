<?php 
namespace Home\Controller;
use Think\Controller;
use Think\Log;

class SmsController extends Controller {
	//private $url = 'http://sms.pro-group.com.cn/sms.aspx';
	public function sendcode() {
		if (IS_POST) {
			$mac = md5($_POST['phone'] . $_POST['code'].C('SMSKEY'));
			if ($mac != $_POST['mac']) {
				return false;
			}
        	// 用于注册的时候 已经完成功能
            $code="感谢您来到一塔湖图众筹，这次你的手机的验证码是：". $_POST['code'].",如非本人操作请忽略此短信。";
			$ret = sendSMS($_POST['phone'],$code, $needstatus, $product, $extno);
            $result = execResult($ret);

			$smodel = M('Smscode');
            $data['mobile'] = $_POST['phone'];
            $data['code'] = $_POST['code'];
            $data['coment'] = $code;
            $data['status'] = $result[1]==0 ? 2 : 3;
            $data['addtime'] = time();
            $data['ip'] = $_POST['ip'];
            $sresult = $smodel->add($data);

            if($result[1]==0){
                echo true;
            }else{
                echo false;
            }	
		}
	}
        /* 
         * 下面不是 还不知道他的功能是干嘛的
         */
	public function sendsms() {
		if (IS_POST) {
			$mac = md5($_POST['time'] . C('SMSKEY'));
			if ($mac != $_POST['mac']) {
				return false;
			}
			if (empty($_POST['content']) || empty($_POST['phone'])) {
				return false;
			}
		/*	$path = C('LOG_PATH') . 'sms.txt';
			Log::write($_POST['phone'] . ':' . $_POST['content'], 
				'SMS-CONTENT', '', $path);
			$data = array('userid' => 416,  // 企业id
				'account' => 'HY-jmzc', // 发送用户帐号
				'password' => 'Hj1234', // 发送帐号密码
				'mobile' => $_POST['phone'], // 全部被叫号码
				'content' => $_POST['content'],
				'sendTime' => '', 
				'action' => 'send',
				'checkcontent' => '0',
				'taskName' => '',
				'countnumber' => $_POST['count'],
				'mobilenumber' => $_POST['count'],
				'telephonenumber' => 0
			);
			// 短信发送
			$xml = curlPost($this->url,$data);
			Log::write($xml, 'SMS-CONTENT', '', $path);
			$res = simplexml_load_string($xml);
    	$arr = json_decode(json_encode($res),true);

			if ($arr['returnstatus'] == 'Success') {
				echo true;
			} else {
				echo false;
			}
*/
                         $code="感谢您注册一塔湖图众筹，您的手机的验证码是：". $_POST['code'].",如非本人操作请忽悠此短信。";
			$ret = sendSMS($_POST['phone'],$code, $needstatus, $product, $extno);
                        $result = execResult($ret);
                        if($result[1]==0){
                            echo true;
                            }else{
                            echo false;
                        }	
		}
	}
        /*
         * 也不知道要干嘛 等知道要在做
         */
	public function getinfo() {
		if (IS_GET) {
			$mac = md5($_GET['time'] . C('SMSKEY'));
			if ($mac != $_GET['mac']) {
				return false;
			}
			$data = array('userid' => 416,  // 企业id
				'account' => 'HY-jmzc', // 发送用户帐号
				'password' => 'Hj1234', // 发送帐号密码
				'action' => 'overage',	// 任务名称
			);

			// 短信发送
			$ret = curlPost($this->url,$data);
			header("Content-type:text/xml;charset=utf-8"); 
			echo $ret;
		}
	}
}
?>