<?php
namespace Admin\Controller;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class XieyiController extends AdminController{
    //显示协议
    public function index(){
           $data=M(agreementInvest)->order('id')->select();
           foreach ($data as $key =>$v){
            //循环中 通过uid值 取出真实姓名 
            $real_name=M(usersDetail)->where(array('id'=>$v['uid']))->field('name')->find();
            //通过pid 取出商品名称
            $gongsi_name=M(project)->where(array('id'=>$v['pid']))->field('project_name')->find();
            //在循环中 合并
            $data[$key]=array_merge($real_name,$data[$key],$gongsi_name);
        }
            
           $this->assign("info",$data);
           $this->display();
    }
    //修改协议
    public function Edit(){
        if(IS_POST){
            $data['content']=$_POST['content'];
            $model=M(agreementInvest);
            $id=$_POST['kid'];
            //error_log($id, 3, "./b.txt");
            if($model->where(array('id'=>$_POST['kid']))->save($data)){
            $this->success('更新成功', U('index'));
            }else{
            $this->success('更新失败', U('index'));    
            }
        }else{
        $id=$_GET['id'];
        $list=M(agreementInvest)->find($id);
        $name=M(usersDetail)->field('name')->find($list['uid']);
        $this->assign('info',$list);
        $this->assign('name',$name);
        $this->display();       
        }
    }
}

