<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0034)http://www.1tht.cn/User/login.html -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="keywords" content="创业,投资,理财,众筹,融资">  
    <meta name="description" content="一塔湖图众筹,
        专注于“互联网金融+”精品项目的股权投融资平台！
        依托北大校友、一塔湖图商学院、中国互联网金融青年会及中国互联网普惠金融研究院等资源，
        提供最优质的互联网金融产业配套服务，筹钱、筹智、筹资源，加速企业成长，
        为创业者与投资人提供快速对接的桥梁！">   
  
    <meta name="renderer" content="webkit">
    <link href="http://www.1tht.cn/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="/Public/Home/fsr/css/common.css" rel="stylesheet">
    <link href="/Public/Home/fsr/css/login.css" rel="stylesheet">
    <script type="text/javascript" src="/Public/Home/fsr/js/jquery-2.0.3.min.js"></script>
    <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
    
    <title>登录—“互联网金融+”精品项目的股权投融资平台</title>

</head>
<body>
    <!--top start-->
    <div class="login-top">
        <div class="login-title">
            <ul class="clearfix">
            <li><span>400-806-8787</span></li>
            <li class="login_wx">
                <span></span>
                <div class="wxbox"><img src="/Public/Home/fsr/images/weixin.jpg"></di>
            </li>
            <?php if(is_login()): ?><li>欢迎：<a href="<?php echo U('MCenter/index');?>"><?php echo get_username();?></a></li>
            <?php else: ?>
            <li><a href="/User/login.html">您好，请登录</a></li>
            <li>|<a href="/User/register.html">免费注册</a></li><?php endif; ?>
        </ul>
        </div>
    </div>
    <!--top end-->
    <div class="login-content">
        <!-- menu start -->
        <div class="login-menu">
            <div class="menubox">
                <!-- <h1><a href="<?php echo U('Index/index');?>"><img src="/Public/Home/fsr/images/logo1.png"></a></h1> -->
                <h1><a href="<?php echo U('Index/index');?>"><img src="/Public/Home/css/../images/logo1.png" style="width:188px"></a></h1>
                <ul class="clearfix">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('List/index');?>">浏览梦想</a></li>
                    <li><a href="<?php echo U('Project/create');?>">发起项目</a></li>
                    <li><a href="<?php echo U('List/index',array('type'=>2,'status'=>0,'p'=>1));?>">实物项目</a></li>
                </ul>
            </div>
        </div>
        <!-- menu end -->
        <!-- login start -->
        <div class="small-login">
            <h2>登录</h2>
            <div class="login-tips" style="display:none">这里是错误提示</div>
            <form method="post" action="<?php echo U();?>" id="register-form">
            <ul class="clearfix">
                <li>
                    <label>用户名：</label>
                    <input type="text" name="username" class="login-input usericon username" placeholder="用户名/手机号码" value="">
                </li>
                <li>
                    <label>密<i></i>码：</label>
                    <input type="password" name="password" class="login-input password" placeholder="密码">
                </li>
                <li>
                    <input type="checkbox" name="remember-user" checked="checked">记住用户名
                    <a href="<?php echo U('User/forget');?>">忘记密码？</a>
                </li>
                <li>
                    <input type="button" value="登录" class="login-submit-btn">
                </li>
            </ul>
            <h3>还没有账号？<a href="<?php echo U('User/register');?>">马上注册</a></h3>
            <h4>或</h4>
            <p><a href="javascript:void(0)" class="wx-login">使用微信快速登录</a></p>
        </div>
        <!-- login end -->
        <div class="login-copy">
            Copyright © 2015 北京一塔湖图众筹科技有限公司 京ICP备15053117号-2
        </div>
    </div>

<!-- 这是弹层 -->
<div class="tanc-bg"></div>
<div class="wx-box">
    <div class="wx-title"><a href="javascript:void()" class="wx-close"><img src="/Public/Home/fsr/images/login_close.png"></a></div>
    <p id = 'login_container'><img src="/Public/Home/fsr/images/login_erma.png"></p>
    <div class="wx-right" style="display:none">
        <p>扫描成功<p>
        <p>请在微信中点击确认即可登录</p>
    </div>

</div>
  
<!-- 鼠标放上 移开时的效果-->
<script>
$(function(){
    $(".login_wx").mouseover(function(){
        $(".wxbox").css("display","block");
    });
    $(".login_wx").mouseout(function(){
        $(".wxbox").css("display","none");
    });

    $('.wx-login').click(function(){
        $('.tanc-bg').show();
        $('.wx-box').show();
    });
    $('.wx-close').click(function(){
        $('.tanc-bg').hide();
        $('.wx-box').hide();
    });


});
if($(document.body).height()<$(window).height()){
    $('.login-content').css('height',$(window).height());

}else{
   $('.login-content').css('height',$(document.body).outerHeight(true)); 
}

$(".login-submit-btn").click(function(){
    username = $('input[name=username]').val();
    password = $('input[name=password]').val();
    $.ajax( {
        url : "<?php echo U('User/login');?>",      
        type:"post",  
        dataType:"json",                                  
        data:"username="+username+"&password="+password,  
        timeout:20000,  
        success:function(data){
            if(data.status == 1){
                $(".login-tips").css("display","none");
                location.href = "<?php echo U(Index/index);?>";
            }else{
                $(".login-tips").css("display","block");
                $(".login-tips").html(data.info);
            }
        }  
  });  
});
    
</script>

<script type="text/javascript">
    var wxLogin = new WxLogin({
        id: "login_container",
        appid: "wx4ab0f6641cbf2631",
        scope: "snsapi_login",
        redirect_uri: "http://www.1tht.cn/Weixin/loginWx",
        state: "1tht2016",
        style: "black",
        href: ""
    }); 
</script>

</body>
</html>