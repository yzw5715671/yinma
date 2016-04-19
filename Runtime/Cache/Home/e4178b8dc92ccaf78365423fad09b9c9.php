<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="keywords" content="创业,投资,理财,众筹,融资" />  
  <meta name="description" content="一塔湖图众筹,
        专注于“互联网金融+”精品项目的股权投融资平台！
        依托北大校友、一塔湖图商学院、中国互联网金融青年会及中国互联网普惠金融研究院等资源，
        提供最优质的互联网金融产业配套服务，筹钱、筹智、筹资源，加速企业成长，
        为创业者与投资人提供快速对接的桥梁！"/>   
  
<meta name="renderer" content="webkit" />

<link href="/Public/Home/css/common.css" rel="stylesheet">
<link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->


    <link href="/Public/Home/css/login.css" rel="stylesheet">

<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
<title><?php echo ($pageTitle); ?>—<?php echo C('WEB_SITE_TITLE');?></title>
<!--<![endif]-->
<script type="text/javascript" src="/Public/Home/js/common.js"></script>
<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?c18b08cac9b94bf4628c0277d3a4d7de";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>

<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!--[if lte IE 7]>
<div id="update-browser"
     style="background:#8E8E8E;color:white;width:960px;line-height:42px;position:absolute;left:50%;margin-left:-480px;z-index:9999;text-align:center;bottom:auto;:top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));">
    <span>
        您的浏览器版本过低。为保证最佳投资体验，您可以<a href="http://rj.baidu.com/soft/detail/14744.html" style="color:white">点击下载</a>
        <a href="http://rj.baidu.com/soft/detail/14744.html"
           style="color:white;text-decoration:underline;background:url('/Public/Home/images/chrome.png') 5px -2px no-repeat;padding-left:25px;">
            谷歌浏览器
        </a>
    </span>
    <a href="#" style="position:absolute;right:15px;top:0;color:white"
       onclick="document.getElementById('update-browser').style.display='none';return false;">以后再说 <span
            style="font-weight:bold">×</span></a>
</div>
<![endif]-->
<!--top -->
<div class="new_top">
<div class="tops2">
<span class="tops_fr">
    <?php if(is_login()): ?>欢迎：<a href="<?php echo U('MCenter/index');?>" class="hover-link"><?php echo get_username();?></a>&nbsp;&nbsp;&nbsp;</span>
        
    <?php else: ?>
        <a href="/User/login.html" >您好，请登录</a>|<a href="/User/register.html" >免费注册</a>&nbsp;&nbsp;&nbsp;</span><?php endif; ?> <span>  
<ul class="xxsk">
    <li><a href="#" class="am_phone" style="line-height: 20px">400-806-8787</a></li>
<!--   <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2756271724&site=qq&menu=yes" class="am_qq" target="_blank">&nbsp;</a></li> -->
   <li class="wxs" id="head_weixin_id"><a href="#" class="am_weixin">&nbsp;</a>
     <div class="wxbox" style="display: none"><img src="/Public/Home/images/weixin.jpg" width="120" height="120" /></div>
   </li>
</ul>
  
<!-- 鼠标放上 移开时的效果-->
<script>
    $("#head_weixin_id").mouseover(function(){
        $(".wxbox").css("display","block");
    });
    $("#head_weixin_id").mouseout(function(){
        $(".wxbox").css("display","none");
    });
</script>


 
  
<!--<a href="/" class="top_hone">回到首页</a> -->

    </div>
</div>
<div class="clear"></div>

<!--top -->
<!-- 头部导航栏 -->
<div class="topbar">
    <div class="contentw">
        <div class="content">
            <h1 class="logo"><a href="<?php echo U('Index/index');?>"><img class="logo-img" src="/Public/Home/css/../images/logo1.png" alt="一塔湖图的众筹"></a></h1>
            <ul class="nav" style="left:430px">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('List/index');?>">浏览梦想</a></li>
                <li><a href="<?php echo U('Project/create');?>">发起项目</a></li>
                <li><a href="<?php echo U('List/index',array('type'=>2,'status'=>0,'p'=>1));?>">实物项目</a></li>
                <!--<li><a href="#">一塔湖图</a></li>-->
            </ul>
            <div class="top_login">
                <?php if(is_login()): ?><a href="<?php echo U('MCenter/index');?>" class="hover-link">
                        <img class="avatar" src="<?php echo get_memberface();?>" alt="">
                        <span class="tri"></span>
                    </a>

                    <div id="user-menu-box" class="user-menu-box">
                        <ul>
                            <li>
                                <a class="menu-item" href="<?php echo U('MCenter/index');?>">用户中心</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo U('MCenter/pj_support');?>">股权众筹</a>
                                <a class="menu-item" href="<?php echo U('MCenter/pr_support');?>">实物众筹</a>
                        <!--        <a class="menu-item" href="<?php echo U('MCenter/stock');?>">股票基金</a> -->
                            </li>
                            <li class="last">
                                <!--<a class="menu-item" href="<?php echo U('User/detail');?>">个人资料</a>-->
                                <a class="menu-item" href="<?php echo U('Account/index');?>">账户管理</a>
                                <a class="menu-item" href="<?php echo U('User/logout');?>">安全退出</a>
                            </li>
                        </ul>
                        <div class="tri-box">
                            <div class="tri tri0"></div>
                            <div class="tri tri1"></div>
                            <div class="tri tri2"></div>
                        </div>
                    </div>
                    <!--<a href="<?php echo U('User/logout');?>" class="reg2">退出</a>-->
                
                <!--    <a href="<?php echo U('User/login');?>" class="reg">登录</a>
                    <a href="<?php echo U('User/register');?>" class="reg2">注册</a>--><?php endif; ?>
            </div>
        </div>

    </div>
    <div class="topbarbg"></div>
</div>
<script>
    var userDropdownMenu = function () {
        var $userMenuBox = $('#user-menu-box');
        $('.top_login').hover(function () {
                    $userMenuBox.fadeIn('fast');
                }, function () {
                    $userMenuBox.fadeOut();
                }
        );
    };
    userDropdownMenu();

</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	


    <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
    <div id="server-data" style="display: none;">
        <input name="mCenterUrl" value="<?php echo U('MCenter');?>">
    </div>
    <div class="main-container">
        <div class="login-section">
            <img src="/Public/Home/images/login_shuff.png">
            <span class="poster-slogan"></span>
            <div class="login-form-container">
                <div class="bind-header">
                    <div class="h1">你的微信还未绑定一塔湖图众筹帐号</div>
                    <div class="h2">请输入您的手机号完成登录或注册</div>
                </div>
                <form name="login-form" id="login-form" action="" method="POST">
                    <div id="errormessage" class="error"></div>
                    <input type="text" name="username" class="login-input usericon username" placeholder="用户名/手机号码"
                           value="">
                    <div id="input-tip"></div>
                    <input type="password" name="password" class="login-input usericon2 password" placeholder="密码">
                    <div class="sms">
                        <input type="text" name="verify" class="login-input input-sms" placeholder="短信验证码" datatype="n"
                               nullmsg="请输入短信验证码">
                        <a title="发送验证码" href="<?php echo U('User/sendsms');?>" id="cellcode_send" class="send-sms">发送验证码</a>
                    </div>

                    <div class="options-box">
                        <input type="checkbox" name="remember-user" checked="checked">
                        <span>记住用户名</span>
                        <a href="<?php echo U('User/forget');?>" title="忘记密码" class="btn-forget" style="">忘记密码?</a></div>
                    <button type="submit" class="login-submit-btn">登&nbsp;录</button>
                    <p class="register-box">
                        还没有帐号？
                        <a href="<?php echo U('User/register');?>" title="还没有帐号？马上注册">马上注册</a>
                    </p>
                    <div class="social-login-box" style="display: block;">
                        <a href="#" title="微信二维码登陆" class="wx-login-button">微信二维码登陆</a>
                    </div>

                </form>
                <!-- 二维码 DOM -->
                <div id="login_container"></div>
                <!-- 注册成功 DOM -->
                <div id="register-success">
                    <p>注册成功！</p>
                    <p><strong>密码为您手机后六位。</strong></p>
                    <p>请前往<a href="<?php echo U('User/savecenter');?>">个人中心</a>修改密码或<a id="loginRedirect" href="<?php echo U('Index/index');?>">前往投资</a>。</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //@formatter:off
        if (!window.btoa || !window.atob) {
            !function(){function t(t){this.message=t}var r="undefined"!=typeof exports?exports:this,e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";t.prototype=new Error,t.prototype.name="InvalidCharacterError",r.btoa||(r.btoa=function(r){for(var o,n,a=String(r),i=0,c=e,d="";a.charAt(0|i)||(c="=",i%1);d+=c.charAt(63&o>>8-i%1*8)){if(n=a.charCodeAt(i+=.75),n>255)throw new t("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");o=o<<8|n}return d}),r.atob||(r.atob=function(r){var o=String(r).replace(/=+$/,"");if(o.length%4==1)throw new t("'atob' failed: The string to be decoded is not correctly encoded.");for(var n,a,i=0,c=0,d="";a=o.charAt(c++);~a&&(n=i%4?64*n+a:a,i++%4)?d+=String.fromCharCode(255&n>>(-2*i&6)):0)a=e.indexOf(a);return d})}();
        }
        //@formatter:on
        var serverData = {};
        $('#server-data').children().each(function () {
            var $this = $(this);
            serverData[$this.attr('name')] = $this.val()
        });
        !function () {
            var config = {
                bindAPI: '/weixin/bindAccount',
                registerAPI: '/weixin/createnewuser'
            };
            var getQS = function (key) {
                var value = location.pathname.match(new RegExp('/' + key + '/([^/\.]+)'));
                return value && decodeURIComponent(value[1]);
            };
            var type = getQS('type');
            if (type === 'bind') {
                var userInfo = {},
                        formData = {};
                try {
                    userInfo = JSON.parse(atob(getQS('userinfo')));
                    formData = {
                        openid: userInfo.openid,
                        // unionid: userInfo.unionid,
                        nickname: userInfo.nickname,
                        headimgurl: userInfo.headimgurl
                    };
                } catch (e) {
                }
                var lastMobile = 0;
                var showInputPassword = function () { // 输入密码
                    $('.login-form-container').removeClass('show-sms').addClass('show-password');
                    $('#input-tip').text('您的手机号已经注册, 请输入密码登录');
                    $('.password').focus();
                    $('.login-submit-btn').removeAttr('disabled').removeClass('disabled').click(function () {
                        formData.username = $('input[name=username]').val();
                        formData.password = $('input[name=password]').val();
                        if (!formData.username || !formData.password) {
                            layer.msg('请输入用户名和密码', 1, -1);
                            return false;
                        }
                        var $button = $(this);
                        $button.attr('disabled', 'disabled').addClass('disabled').text('正在绑定...');
                        $.getJSON(config.bindAPI, formData).then(function (json) {
                            if (json.success) {
                                $button.text('绑定成功 √');
                                location.href = sessionStorage.getItem('loginRedirect') || json.url || serverData.mCenterUrl;
                                sessionStorage.removeItem('loginRedirect');
                                return 'success';
                            } else if (json.errorcode === 1) {
                                layer.alert(json.info, -1, function () {
                                    location.href = sessionStorage.getItem('loginRedirect') || json.url || serverData.mCenterUrl;
                                    sessionStorage.removeItem('loginRedirect');
                                });
                            } else {
                                layer.msg(json.info, 2, -1);
                                return json.info
                            }
                        }, function () {
                            return 'fail';
                        }).always(function (result) {

                            if (result === 'success') {

                            } else {
                                $button.removeAttr('disabled').removeClass('disabled').text('下一步')
                            }
                        });
                        return false;
                    });
                };
                var showInputSMS = function () { // 输入短信验证码
                    $('.login-form-container').removeClass('show-password').addClass('show-sms');
                    $('#input-tip').text('您的手机号尚未注册, 请验证您的手机号码');
                    $('.input-sms').focus();

                    var longtime = 0;
                    var $btnSendSMS = $('#cellcode_send');
                    var uptime = function () {
                        $btnSendSMS.html('请稍等' + longtime + '秒');
                        longtime = longtime - 1;
                        if (longtime <= 0) {
                            clearInterval(id);
                            $btnSendSMS.html('获取验证码');
                        }
                    };
                    $btnSendSMS.click(function () {
                        var phone = $('.username').val();
                        var sms_type = 'weixinlogin';
                        if (longtime > 0) {
                            return false;
                        }
                        $.post($(this).attr('href'), {'phone': phone,'sms_type': sms_type}, function (data) {
                            if (data.status == 1) {
                                longtime = 120;
                                $('#cellcode_send').html('请稍等' + longtime + '秒');
                                // 倒计时
                                id = setInterval(uptime, 1000);
                            } else {
                                alert(data.info);
                            }
                        });
                        return false;
                    });
                    $('.login-submit-btn').removeAttr('disabled').removeClass('disabled').click(function () {
                        formData.mobile = $('input[name=username]').val();
                        formData.verify = $('input[name=verify]').val();
                        var $button = $(this);
                        $button.attr('disabled', 'disabled').addClass('disabled').text('正在验证...');
                        $.post(config.registerAPI, formData).then(function (json) {
                            /*$('#register-success').html('<pre>' + JSON.stringify(json, null, 4), +'</pre>');*/

                            if (json.success) {
                                $button.text('注册成功 √');
                                $.layer({
                                    type: 1,
                                    area: ['400px', '300px'],
                                    title: false,
                                    closeBtn: false,
                                    page: {dom: '#register-success'}
                                });

                                return 'success';
                            } else {
                                layer.msg(json.info, 2, -1);
                                return json.info
                            }
                        }, function () {
                            return 'fail';
                        }).then(function (result) {
                            if (result === 'success') {

                            } else {
                                $button.removeAttr('disabled').removeClass('disabled').text('重试')
                            }
                        });
                        return false;
                    });
                };
                var checkMobile = function (showErr) {
                    var $this = $(this);
                    setTimeout(function () {
                        var val = $this.val();
                        if (val === lastMobile) return;

                        if (val.match(/^(0|86|17951)?(1[3578])[0-9]{9}$/)) {
                            lastMobile = val;
                            var $username = $('.username').attr('disabled', 'disabled').addClass('disabled').click(function () {
                                $(this).removeClass('disabled')
                            });
                            $('#input-tip').text('检查手机号...');
                            $.get('/weixin/checkBindMobile', {mobile: $this.val()}).then(function (json) {
                                $username.removeAttr('disabled');
                                if (json.success) {
                                    if (json.exist) { // 已存在, 输入密码
                                        showInputPassword()
                                    } else { // 不存在, 输入验证码
                                        showInputSMS()
                                    }
                                } else {

                                }
                            })
                        } else {

                        }
                    }, 0);
                };
                var showInputMobile = function () { // 第一步: 输入手机号
                    $('.login-form-container').addClass('bind');
                    $('.username').attr('placeholder', '手机号码').focus().bind('input propertychange', checkMobile);
                    $('.login-submit-btn').text('下一步').attr('disabled', 'disabled').addClass('disabled');
                    $('form').submit(function () {
                        return false;
                    })
                };
                showInputMobile();
            } else {
                var wxLogin = function () {
                    new WxLogin({
                        id: "login_container",
                        appid: "wx4ab0f6641cbf2631",
                        scope: "snsapi_login",
                        redirect_uri: "http://www.1tht.cn/Weixin/loginWx",
                        state: "1tht2016",
                        style: "black",
                        href: ""
                    });
                };
                $("form").submit(function () {
                    var self = $(this);
                    $.post(self.attr("action"), self.serialize(), success, "json");
                    return false;

                    function success(data) {
                        if (data.status) {
                            window.location.href = data.url;
                        } else {
                            self.find("#errormessage").html(data.info);
                        }
                    }
                });
                $('.wx-login-button').click(function () {
                    wxLogin();
                    $.layer({
                        type: 1,
                        area: ['300px', '409px'],
                        title: false,
                        border: [0],
                        shadeClose: true,
                        page: {dom: '#login_container'}
                    });
                    return false;
                });

            }
            var loginRedirect = sessionStorage.getItem('loginRedirect');
            if (loginRedirect) {
                $('#loginRedirect').attr('href', loginRedirect);
                sessionStorage.removeItem('loginRedirect');
            }
        }();


    </script>

	<!-- /主体 -->

	<!-- 底部 -->
	<!-- 底部================================================== -->

<!-- 新加 -->
<div class="fl w100 foot">
    <div class="foot_warp">
        <div class="foot_top"><img src="/Public/Home/images/foot_smile.png"></div>
        <!--<h1>假如人生不曾相遇，你不会了解世界还有这样一个我</h1>-->
        <h1>商学院 &nbsp;·&nbsp; 实业 &nbsp;·&nbsp; 金融 &nbsp;·&nbsp; 社群</h1>
        <!--<ul class="foot_text">
            <li><a target="_blank" href="<?php echo U('Info/show?key=about');?>">关于我们</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=xinshouzhiyin');?>">新手指引</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=agreement');?>">用户协议</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=shenmingshu');?>">风险提示</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=fenpei');?>">一塔湖图众筹规则</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=crowd');?>">了解众筹</a></li>
        </ul>-->
        <ul class="foot_text">
            <li><a target="_blank" href="<?php echo U('Info/show?key=about');?>">认识一塔湖图</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=joinus');?>">加入我们</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=fenpei');?>">利益分配</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=shenmingshu');?>">风险提示</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=invest');?>">认投规则</a> 丨</li>
            <li><a target="_blank" href="<?php echo U('Info/show?key=crowd');?>">了解众筹</a></li>
        </ul>
        <div style="clear:both;"></div>
        <div class="foot_bottom">
            <ul class="foot_tg">
                <li class="wx" id="weixin_id">
                    <a target="_blank" class="footer-weixin" >微信</a>
                    <span class="weixin-qrcode"><img width="240" height="240" src="/Public/Home/images/weixin.jpg" alt=""></span>
                </li>
               <li class="wb"><a href="http://weibo.com/5724180766" target="_blank">新浪微博</a></li>
                <li class="dh">400-806-8787</li>
            <!--  <li class="yx"><a target="_blank" href="mailto:zamazc@zamazc.com">bp@1tht.cn</a></li>-->
                <li class="yx">bp@1tht.cn</li>
            </ul>
        </div>
        <div class="foot_tag">Copyright © 2015 北京一塔湖图众筹科技有限公司 京ICP备15053117号-2</div>
    </div>
</div>
<!-- 新加 -->
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden" style="display:none;"><!-- 用于加载统计代码等隐藏元素 -->
    <script src="http://s6.cnzz.com/z_stat.php?id=1253481980&web_id=1253481980" language="JavaScript"></script>
    
</div>

<script>
	$('#weixin_id').mouseover(function(){
		//alert('a'); 会执行
		$('.weixin-qrcode').css('display','block');
		});
	$('#weixin_id').mouseout(function(){
		$('.weixin-qrcode').css('display','none');
		});
</script>
	<!-- /底部 -->
</body>
</html>