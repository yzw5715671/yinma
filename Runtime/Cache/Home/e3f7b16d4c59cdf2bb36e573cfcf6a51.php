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


    <link href="/Public/Home/css/detail.css" rel="stylesheet">
    <link href="/Public/Home/css/validform.css" rel="stylesheet">
    <style>
        .leader1 {
            font-size: 14px;
        }

        .leader1 a {
            color: #ff5a5a;
            text-decoration: underline;
        }

        .apply_leader {
            padding: 0 40px;
            border: 2px solid #999;
            cursor: pointer;
            display: inline-table;
            font-size: 16px;
            position: relative;
            line-height: 36px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            overflow: hidden;
        }

        .agreement1 {
            margin-left: 20px;
        }

        .apply_leader:hover {
            border-color: #ed655a;
        }

        .apply_leader.active {
            border-color: #ed655a;
        }

        .apply_leader .selected {
            display: none;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .apply_leader.active .selected {
            display: block;
        }

        .agreement1 {
            display: inline-table;
        }
    </style>

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
	


    <div class="fl w100 mainwrap mt25">
        <div class="content">
            <div class="main2 mt20">
                <h4><?php echo ($project["project_name"]); ?></h4>
                <dl class="rzxx mt25 cl">
                    <dt>融资信息</dt>
                    <dd style="border-left:1px solid rgb(221, 221, 221)"><div><span><?php echo (change_fund($project["need_fund"])); ?> </span><span style="font-size:14px">元</span></div>融资目标额</dd>
                    <dd><div><span><?php echo (change_fund($project["follow_fund"])); ?> </span><span style="font-size:14px">元</span></div>起投额</dd>
                    <dd><div><span><?php echo (change_fund($project["final_valuation"])); ?> </span><span style="font-size:14px">元</span></div>最终估值</dd>
                    <dd><div><span><?php echo (number_format($project["rate_fund"],4)); ?> </span><span style="font-size:14px">%</span></div>出让比例</dd>
                </dl>
                <input type="hidden" id="follow_fund" value="<?php echo ($project["follow_fund"]); ?>">
                <input type="hidden" id="need_fund" value="<?php echo ($project["need_fund"]); ?>">
                <input type="hidden" id="valuation" value="<?php echo ($project["final_valuation"]); ?>">
                <h2>特殊回报：<?php echo ($project["extra"]); ?></h2>
                <h4 class="c2"><i></i>您的跟投金额</h4>
                <div class="gt mt20">
                    <form action="<?php echo U('project/follow');?>" id="form-inquiry" method="post" class="form-horizontal">
                        <input type="hidden" name="id" value="<?php echo ($project["id"]); ?>">
                        <div class="left fl">
                            <div class="number">
                                <input type="button" value="-" onclick="opera('#myfund', false);" class="low"><input
                                    type="text" id="myfund" value="<?php echo (round($project["follow_fund"],0)); ?>" datatype="n"
                                    maxlength="7" nullmsg="请输入投资金额" errormsg="投资金额必须为数字" name="fund" class="c3"/>
                                <input type="button" value="+" onclick="opera('#myfund', true);" class="up">
                                <span><em id="hasrate"><?php echo (round($project["rate"],4)); ?></em> %</span>
                            </div>
                            <div class="warr">投资理由</div>
                            <div>
                                <textarea name="others" style="font-size:14px" class="d"></textarea>
                            </div>
                            <?php if($project["vote_leader"] != 2): ?><div class="leader1">
                                    <input type="hidden" name="leader_type" id="leader_type" value="0">
                                    <p class="apply_leader">我要领投 <img class="selected"
                                                                      src="/Public/Home/images/banklist/selected.png" alt=""></p>
                                    <p class="agreement1"><a href="<?php echo U('Project/leader_info?isread=1');?>"
                                                             target="_blank">领投规则</a></p>
                                </div><?php endif; ?>
                            <div class="agree">
                                <label for="agree"><input name="agree" id="agree" type="checkbox" value="1" checked>我同意并遵守投资规则</label>
                                <a href="<?php echo U('Info/show?key=follow');?>" target="_blank">《跟投规则》</a><a href="<?php echo U('Info/show?key=fenpei');?>" target="_blank">《投资利益分配规则》</a>
                                <a href="<?php echo U('Info/show?key=after');?>" target="_blank">《投后管理规则》</a>
                            </div>
                            <div>
                                <input type="submit" id="confirm" value="确认跟投" class="s">
                            </div>
                        </div>
                    </form>
                    <div class="right ri">
                        <div class="tips"><b>风险提示</b>
                            天使投资是高风险投资，只适合风险识别、评估、承受能力较强的投资人。
                            我们不承诺任何保本和最低收益，也不会就投资可能产生的亏损，承担任何赔偿责任，请您谨慎作出投资决定。<br>
                            <a href="<?php echo U('Info/show?key=shenmingshu');?>" target="_blank">《投资风险提示书》</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="auth">
        <div class="header clearfix">
            <a href="#" class="tab-title auth active" data-target="login-box">实名认证</a>
            <!--<a href="#" class="tab-title reg" data-target="reg-box">快速注册</a>
            <a href="#" class="tab-title password" data-target="change-password-box">输入密码</a>-->
        </div>
        <div class="step-box clearfix">
            <div class="step auth-box" data-index="0">

                <div class="message success">您还未实名认证，请先进行实名认证。</div>
                <input name="name" class="input-text real-name" placeholder="真实姓名">
                <input name="card_id" class="input-text card" placeholder="身份证号码">

                <button class="btn btn-auth">认 证</button>
                <div class="tip">为了确保您的投资权益请完善您的实名认证，如遇到问题请联系客服 400-806-8787 或查询（<a href="/info/show/key/common.html"
                                                                                     target="_blank">常见问题</a>）。
                </div>
            </div>
        </div>
    </div>

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

    <script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
    <script>
        var api = {
            checkAuth: '/project/checkAuth',
            checkUserInfo: '/project/checkUserInfo',
            authentication: '/user/realnameapi'
        };
        var authLayerId = 0;

        $('#confirm').click(function () {
            $.getJSON(api.checkAuth).then(function (json) {
                if (!json.success) {
                    authLayerId = $.layer({
                        type: 1,
                        area: ['450px', '450px'],
                        title: false,
                        page: {dom: '#auth'}
                    });
                } else {
                    $.getJSON(api.checkUserInfo).then(function (a) {
                        if (!a.success) {
                            window.location.href = '<?php echo U("User/user_info",array("id"=>$_GET["id"]));?>';
                        }else{
                            $('#form-inquiry').submit();
                        }
                    });
                }
            });
            return false
        });
        $('.btn-auth').click(function () {
            var $authBox = $('.auth-box');

            var _data = {
                name: $authBox.find('.real-name').val(),
                card_id: $authBox.find('.card').val()
            };
            var $btnAuth = $authBox.find('.btn-auth');
            $btnAuth.attr('disabled', 'disabled').addClass('disabled').text('正在处理中, 请稍候...');
            $.post(api.authentication, _data, function (json) {
                if (json.success) {
                    $authBox.find('.btn-auth').text('认证成功');
                    setTimeout(function () {
                        layer.close(authLayerId)
                    }, 300);
                    $('#form-inquiry').submit();
                } else {
                    $btnAuth.removeAttr('disabled').removeClass('disabled').text('认证失败, 请重试');
                    $authBox.find('.message').removeClass().addClass('message error').text(json.info);
                    layer.msg(json.info, 2, -1);
                }
            })
        });
        function opera(x, y) {
            var rs = new Number($(x).val());
            if (isNaN(rs)) {
                rs = 0;
            }
            if (y) {
                rs = rs + 1000;
            } else {
                rs = rs - 1000;
            }
            $(x).val(checkFund(rs));
        }

        function checkFund(v) {
            var min_follow = new Number($('#follow_fund').val());
            var max_follow = new Number($('#need_fund').val());
            var valuation = new Number($('#valuation').val());

            // 投资金额处理为1000的倍数
            v = Math.ceil(v / 1000) * 1000;
            if (v > max_follow) {
                v = max_follow;
            } else if (v < min_follow) {
                v = min_follow;
            }
            // 计算股份占比
            var rate = (Math.round(v * 1000000 / valuation) / 10000);
            $("#hasrate").html(rate);
            return v;
        }
        $('#myfund').blur(function () {
            var rs = new Number($("#myfund").val());
            if (isNaN(rs)) {
                rs = 0;
            }
            $("#myfund").val(checkFund(rs));
        });

        $(".apply_leader").click(function () {
            var _this = $(this);
            if (_this.hasClass('active')) {
                $('#leader_type').val(0);
                _this.removeClass('active');
            } else {
                _this.addClass('active');
                $('#leader_type').val(1);
            }
        });

        $('#form-inquiry').Validform({
            tipSweep: true,
            tiptype: function (msg, o, cssctl) {
                if (o.type == 3) {
                    layer.alert(msg, 1);
                }
            }, ajaxPost: true,
            beforeSubmit: function () {
                var agree = $('#agree:checked').length;
                if (agree == 0) {
                    layer.alert('为了保障您的权益，请阅读并接受相关投资协议后，继续您的投资旅程。');
                    return false;
                }
            },
            callback: function (data) {
                if (data.status == 1) {
                    layer.alert(data.info, 9, function () {
                        window.location.href = data.url;
                    });
                }
            }
        });

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