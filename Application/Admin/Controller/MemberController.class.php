<?php 
namespace Admin\Controller;

use User\Api\UserApi;
class MemberController extends AdminController {
	// 显示所有注册会员
	public function index() {
		//获取列表数据
		$nickname       =   I('nickname');
    $map['status']  =   array('egt',0);
    if(is_numeric($nickname)){
      $map['id|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
    }else{
	    $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
    }

    $list   = $this->lists('Userstatus', $map, 'create_time desc');

		//var_dump($list);die();
		int_to_string($list,array('status'=>array(0=>'未激活',1=>'已激活')
			,'status1'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status2'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status3'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')
			,'status4'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')));
		$this->_list = $list;

		$this->display();
	}

	// 显示会员详细信息
	public function member() {

	}

	//导出用户列表
	public function exploadUsersList(){

		$list = M('Users as u')->field('u.id,u.nickname,u.score,u.login,u.last_login_time,d.name,d.phone,d.card_id,i.informations')->join('left join jm_users_detail as d on u.id = d.id')->join('left join jm_users_informations as i on u.id = i.uid')->where(array('status'=>1))->order('id desc')->select();

		$this->exportexcel($list,'UsersList');
	}

	/**
	 * 导出数据为excel表格
	 *@param $data    一个二维数组,结构如同从数据库查出来的数组
	 */
	private function exportexcel($data,$projectinfo)
	{
		$name = $projectinfo['project_name'].'-'.date('YmdHis');
	
	
		vendor('PHPExcel.Classes.PHPExcel');
		vendor('PHPExcel.Classes.PHPExcel.IOFactory');
		error_reporting(E_ALL);
		date_default_timezone_set("PRC");
	
		$objPHPExcel = new \PHPExcel();
		/*以下是一些设置 ，什么作者 标题啊之类的*/
		$objPHPExcel->getProperties()
			->setCreator("")
			->setLastModifiedBy("")
			->setTitle("")
			->setSubject("")
			->setDescription("")
			->setKeywords("")
			->setCategory("");
		 
		/*以下就是对处理Excel里的数据， 横着取数据，主要是这一步，其他基本都不要改*/
		 
		$objPHPExcel->setActiveSheetIndex(0)
		//Excel的第A列，uid是你查出数组的键值，下面以此类推
			->setCellValue('A1', "编号")
			->setCellValue('B1', "用户昵称")
			->setCellValue('C1', "积分")
			->setCellValue('D1', "登录次数")
			->setCellValue('E1', "最后登录时间")
			->setCellValue('F1', "真实姓名")
			->setCellValue('G1', "身份证号")
			->setCellValue('H1', "公司")
			->setCellValue('I1', "职位")
			->setCellValue('J1', "手机号码")
			->setCellValue('K1', "微信号")
			->setCellValue('L1', "资产是否够300万")
			->setCellValue('M1', "近三年平均收入是否够50万")
			->setCellValue('N1', "投资偏好")
			->setCellValue('O1', "投资经验年限")
			->setCellValue('P1', "邀请码来自")
			->setCellValue('Q1', "已投项目")
			->setCellValue('R1', "备注");

		foreach($data as $k => $v){

			$v['informations'] = json_decode($v['informations'],ture);

			if($v['informations']){
				$v['informations']['financial_assets'] = $v['informations']['financial_assets'] == 1 ? '是' : '否';
				$v['informations']['three_year_income'] = $v['informations']['three_year_income'] == 1 ? '是' : '否';

				foreach ($v['informations']['investment'] as $key => &$value) {

					if($value == 1){
						$value = '股票';
					}else if($value == 2){
						$value = '信托';
					}else if($value == 3){
						$value = '公募基金';
					}else if($value == 4){
						$value = '私募基金';
					}else if($value == 5){
						$value = 'PE';
					}else if($value == 6){
						$value = 'VC';
					}else if($value == 7){
						$value = '早期股权投资';
					}else{
						$v['informations']['investment'] = array('没有投资经验');
					}
					
				}
				$v['informations']['investment'] = implode(',', $v['informations']['investment']);

				switch ($v['informations']['investment_experience']) {
					case 1:
						$v['informations']['investment_experience'] = '1-3年';
						break;
					case 2:
						$v['informations']['investment_experience'] = '3-5年';
						break;
					case 3:
						$v['informations']['investment_experience'] = '5-10年';
						break;
					default:
						$v['informations']['investment_experience'] = '10年以上';
						break;
				}
			}


			$num=$k+2;
			$objPHPExcel->setActiveSheetIndex(0)
			//Excel的第A列，$num是你查出数组的键值，下面以此类推
			->setCellValue('A'.$num, $v['id'])
			->setCellValue('B'.$num, $v['nickname'])
			->setCellValue('C'.$num, $v['score'])
			->setCellValue('D'.$num, $v['login'])
			->setCellValue('E'.$num, date('Ymd His',$v['last_login_time']))
			->setCellValue('F'.$num, $v['name'].' ')
			->setCellValue('G'.$num, $v['card_id'].' ')
			->setCellValue('H'.$num, ' ')
			->setCellValue('I'.$num, ' ')
			->setCellValue('J'.$num, $v['phone'].' ')
			->setCellValue('K'.$num, ' ')
			->setCellValue('L'.$num, $v['informations']['financial_assets'])
			->setCellValue('M'.$num, $v['informations']['three_year_income'])
			->setCellValue('N'.$num, $v['informations']['investment'])
			->setCellValue('O'.$num, $v['informations']['investment_experience']);
		}
		 
		$objPHPExcel->getActiveSheet()->setTitle('User');
		$objPHPExcel->setActiveSheetIndex(0);
	
		$objWriter= \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
	
		$FileName = $name.'.xls';
	
		header('Pragma:public');
		header('Content-Type:application/x-msexecl;name="'.$FileName.'"');
		header("Content-Disposition:inline;filename=$FileName");
	
		$objWriter->save('php://output');
	
	}


    /**
     * 修改密码提交
     * @author huajie <banhuajie@163.com>
     */
    public function profile(){
        if ( IS_POST ) {
            //获取参数
	        $uid        =   $_GET['uid'];
            // $uid = I('uid');
            $password = I('password');
			$data['password'] = I('repassword');
			
            empty($password) && $this->error('请输入密码');
            empty($data['password']) && $this->error('请输入确认密码');

            if($data['password'] !== $password){
                $this->error('您输入的密码与确认密码不一致');
            }

            $Api = new UserApi();
            $res = $Api->updatePwd($uid, $data);
            // var_dump($res);exit();

            if($res['status']){
                $this->success('修改密码成功！', U(''));
            }else {
	            if ($res['info'] < 0){
	            	$message = $this->showRegError($res['info']);
	              $this->error($message);
	            }else{
	            	$this->error($res['info']);
	            }
            }
            	

        }else{
	        $uid        =   $_GET['uid'];
        	$this->assign('uid',$uid);
            $this->display();
        }
    }

	// 会员审核
	public function review() {
		$id = $_GET['id'];
		$type = $_GET['type'];
	
		if (!$id) {
			$this->error('页面不存在');
		}

		if (IS_POST) {
			//更新user_authinvestor
			if($type == 'founder')
			{
				$authid = 0;
			}else{
				$authid = 1;
			}
				
			$data = M('user_auth')->where(array('uid'=>$id,'auth_id'=>$authid))->find();	
			M('user_auth')->save(array('id' => $data['id'], 'status'=>9));

			//OLD
			$type = 'is_' . $type;
			M('Users')->save(array('id' => $id, $type=>2));
			
			$this->success('审核通过', U('index'));
		} else {
			$data = M('UsersDetail')->find($id);
			$this->data = $data;
			$this->statustype = $type;
			$this->display();	
		}
	}
	
	// 领投人
	public function applyLead() {
		$id = $_GET['id'];
		if (IS_POST) {

			$investor_status = I('capacity');
			$describe = I('describe');

			//获取user_auth对应的key
			$authid = 3;
			$auth = M('user_auth')->where(array('uid'=>$id,'auth_id'=>$authid))->find();
				
			$date['id']=$id;
			$date['is_investor']=$investor_status;
			
			$userauth['id'] =$auth['id'];
			
			if($investor_status==3){
				$msg='审核通过';
				$userauth['status'] =9;
			}else{
				$msg='审核拒绝';
				$date['investor_content']=$describe;
				$userauth['info']=$describe;
				$userauth['status'] =1;
			}
			M('Users')->save($date);
			
			//更新user_auth
			M('user_auth')->save($userauth);
			
			$this->success($msg, U('index'));
		} else {
			
			$data = M('UsersDetail')->find($id);
			$this->industry = get_code('industry');
			$this->user = M('Users')->find($id);
			$this->data = $data;
			$this->display('applylead');
		}
	}
	
	public function capacity(){
		$id = $_GET['id'];
		$type = $_GET['type'];
		if (!$id) {
			$this->error('页面不存在');
		}
		if (IS_POST) {
			$investor_status = I('capacity');
			$describe = I('describe');

			//获取user_auth对应的key
			$authid = 2;
			$auth = M('user_auth')->where(array('uid'=>$id,'auth_id'=>$authid))->find();

			$date['id']=$id;
			$date['investor_status']=$investor_status;
			
			$userauth['id'] =$auth['id'];
			
			if($investor_status==9){
				$msg='审核通过';
				$userauth['status'] =9;
			}else{
				$msg='审核拒绝';
				$date['capacity_content']=$describe;
				$userauth['info']=$describe;
				$userauth['status'] =1;
			}
			
			M('Users')->save($date);
			
			//更新user_auth
			M('user_auth')->save($userauth);
				
			$this->success($msg, U('index'));
		} else {
    		$this->user = M('Users')->find($id);
    		$this->detail = M('UsersDetail')->find($id);
			$this->display();
		}	
	}

	// 会员操作
	public function operate() {
		switch ($_GET['method']) {
			case 'forbidUser':
				$data['status'] = $_GET['status'];
				$id = $_GET['id'];
				if(!isset($data['status'])){
					throw new Exception("没有状态", 1);
				}
				if (empty($id)) {
					throw new Exception("没有uid", 1);
				}
	    		$result = M('Users')->where('id='.$id)->save($data);
	    		if ($result == 1) {
					$this->ajaxReturn(array('status'=>true));
	    		}else{
					$this->ajaxReturn(array('status'=>false));
	    		}
				break;
			case 'resumeUser':
				break;
			default:
				# code...
				break;
		}
	}

	// 未实名用户列表
	public function memberlist() {
		//获取列表数据
		$nickname       =   I('nickname');
    $map['status']  =   array('egt',0);
    $map['status1']  =   array(array('EXP', 'IS NULL'), array('eq', -1) , 'OR');
    if(is_numeric($nickname)){
      $map['id|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
    }else{
    	if (!empty($nickname)){
    		$map['nickname']    =   array('like', '%'.(string)$nickname.'%');}
    }

    $list   = $this->lists('Userstatus', $map, 'create_time desc');

		//var_dump($list);die();
		int_to_string($list,array('status'=>array(0=>'未激活',1=>'已激活')
			,'status1'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status2'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status3'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')
			,'status4'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')));
		$this->_list = $list;

		$this->display('memberlist');
	}

	// 后台认证用户实名
	public function realname() {
		if (IS_GET) {
			$this->id = $_GET['id'];
			$this->display('realname');
		} else {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$card_id = strtoupper($_POST['card_id']);

			if (empty($id) || empty($name) || empty($card_id)) {
				$this->error('请完善实名相关信息。');
			}
			
			$detail = array('id'=>$id, 'name'=>$name, 'card_id'=>$card_id);

			$detail['update_id'] = $id;
			$detail['udpate_time'] = NOW_TIME;

			$data = M('UsersDetail')->find($id);
			if ($data) {
				M('UsersDetail')->save($detail);
			} else {
				$detail['create_id'] = $id;
				$detail['create_time'] = NOW_TIME;
				M('UsersDetail')->add($detail);
			}

			$data = array('uid'=>$id,'auth_id'=>0);
    	$auth = M('user_auth')->where($data)->find();
    	if (!$auth) {
    		$data['status']= 9;
    		M('user_auth')->add($data);	
    	} else if ($auth['status'] != 9) {
    		$auth['status']= 9;
    		M('user_auth')->save($auth);
    	}
			unset($data['status']);
			$data['auth_id'] = 1;
			$auth = M('user_auth')->where($data)->find();
			if (!$auth) {
    		$data['status']= 9;
    		M('user_auth')->add($data);	
    	} else if ($auth['status'] != 9) {
    		$auth['status']= 9;
    		M('user_auth')->save($auth);
    	}
    	$this->success('实名信息更新成功。');
		}
	}

	// 领投人申请列表
	public function leadlist() {
		//获取列表数据
		$nickname       =   I('nickname');
    $map['status']  =   array('egt',0);
    $map['status4']  =   array('egt',0);
    if(is_numeric($nickname)){
      $map['id|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
    }else{
	    $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
    }

    $list   = $this->lists('Userstatus', $map, 'status4, create_time desc');

		//var_dump($list);die();
		int_to_string($list,array('status'=>array(0=>'未激活',1=>'已激活')
			,'status1'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status2'=>array(-1=>'',0=>'申请中',1=>'未通过',9=>'通过')
			,'status3'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')
			,'status4'=>array(-1=>'',0=>'申请中',1=>'已拒绝',9=>'通过')));
		$this->_list = $list;

		$this->display('leadlist');
	}

	// 添加用户
  public function add($username = '', $password = '', $repassword = '', $mobile = ''){
    if(IS_POST){
      /* 检测密码 */
      if($password != $repassword){
        $this->error('密码和重复密码不一致！');
      }
      
      /* 调用注册接口注册用户 */
      $User   =   new UserApi;
      $uid    =   $User->register($username, $password, $mobile);
      if(0 < $uid){ //注册成功
        $Member = M('Users');
				$data = array('id'=> $uid, 
					'nickname'=> $username, 
					'status' => 1,
					'reg_ip'=>get_client_ip(1), 
					'create_time' => NOW_TIME,
					'reg_time'=>NOW_TIME);
				$data = $Member->create($data);
				$ret = $Member->add($data);
				if (!$ret) {
					$this->ajaxReturn(array('status'=>'0', 'info'=>$Member->getError()));
					return;
   			}

				$detail = array('id'=>$id, 'phone'=>$mobile, 'create_time'=>NOW_TIME, 'update_time'=>NOW_TIME);
				M('UsersDetail')->add($detail);
				
				$this->success('恭喜您，注册成功！', U('Index/index'));
      } else { //注册失败，显示错误信息
        $this->error($this->showRegError($uid));
      }
    } else {
      $this->meta_title = '新增用户';
      $this->display();
    }
  }

		/**
	 * 获取用户注册错误信息
	 * @param  integer $code 错误编码
	 * @return string        错误信息
	 */
	private function showRegError($code = 0){
		switch ($code) {
			case -1:  $error = '用户名长度必须在16个字符以内！'; break;
			case -2:  $error = '用户名被禁止注册！'; break;
			case -3:  $error = '用户名被占用！'; break;
			case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
			case -5:  $error = '邮箱格式不正确！'; break;
			case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
			case -7:  $error = '邮箱被禁止注册！'; break;
			case -8:  $error = '邮箱被占用！'; break;
			case -9:  $error = '手机格式不正确！'; break;
			case -10: $error = '手机被禁止注册！'; break;
			case -11: $error = '手机号被占用！'; break;
			default:  $error = '未知错误';
		}
		return $error;
	}
}
?>