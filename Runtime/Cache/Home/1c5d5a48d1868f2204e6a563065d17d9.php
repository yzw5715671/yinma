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


    <link href="/Public/Home/css/touzi.css" rel="stylesheet">
    <link href="/Public/Home/css/validform.css" rel="stylesheet">

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
	


<div class="touzi-cont">
	<h3>合格投资人认证</h3>
	<div class="touzi-body">
		<form action="<?php echo U('User/user_info');?>" method="post" id='confirm' accept-charset="utf-8">
			<h4>请根据您的真实情况完成以下资产状况选择：</h4>
			<p class="touzi-ming">您的金融资产是否高于300万元人民币</p>
			<p class="touzi-inp">
				<input type="hidden" name='id' value='<?php echo ($_GET["id"]); ?>'>
				<span><input type="radio" name='financial_assets' value='1' checked>是</span>
				<span><input type="radio" name='financial_assets' value='0'>否</span>
			</p>
			<p class="touzi-ming">您近三年个人年均收入是否高于50万元人民币</p>
			<p class="touzi-inp">
				<span><input type="radio" name='three_year_income' value='1' checked>是</span>
				<span><input type="radio" name='three_year_income' value='0'>否</span>
			</p>
			<h4>您的投资经验：</h4>
			<p class="touzi-ming">您是否进行过以下投资（可多选）：</p>
			<ul class="clearfix touzi-ul">
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='1'>股票</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='2'>信托</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='3'>公募基金</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='4'>私募基金</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='5'>PE</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='6'>VC</span></li>
				<li><span><input type="checkbox" class='investment_yes' name='investment[]' value='7'>早期股权投资</span></li>
				<li><span><input type="checkbox" class='investment_no' name='investment[]' value='8'>以上都没有</span></li>
			</ul>
			<p class="touzi-ming">您的投资经验有：</p>
			<p class="touzi-inp">
				<span><input type="radio" name='investment_experience' value='1'>1-3年</span>
				<span><input type="radio" name='investment_experience' value='2'>3-5年</span>
				<span><input type="radio" name='investment_experience' value='3'>5-10年</span>
				<span><input type="radio" name='investment_experience' value='4'>10年以上</span>
			</p>
			<h4>关于股权融资的风险您必须知道的：</h4>
			<p class="touzi-shop">
				<span><input type="checkbox" class='agreement_1' name='agreement[]' value='1'></span>
				<i>我已知晓股权融资是一种高风险投资，是一种没有固定收益和固定期限的投资，有产生本金亏损的可能性。</i>
			</p>
			<p class="touzi-shop">
				<span><input type="checkbox" class='agreement_2' name='agreement[]' value='2'></span>
				<i>我承诺以上登记的所有信息属实，并对虚假信息产生的一切后果负责。我已阅读并签署<a href='/Info/show/key/agreement.html'>《注册服务协议》</a> <a href='/Info/show/key/shenmingshu.html'>《投资风险提示书》</a>。
				</i>
			</p>
			<div class="touzi-btn">
				<input type="submit" id='confirm_sub'value="提交认证">
			</div>
		</form>
		
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
		$('.investment_no').click(function(){
			if($(this).is(":checked")){
				$('.investment_yes').attr("checked", false);
			}
		});

		$('.investment_yes').click(function(){
			if($(this).is(":checked")){
				$('.investment_no').attr("checked", false);
			}
		});

		$('#confirm_sub').click(function () {
			$('#confirm').submit();
		});

		$('#confirm').Validform({
            tipSweep: true,
            tiptype: function (msg, o, cssctl) {
                if (o.type == 3) {
                    layer.alert(msg, 1);
                }
            }, ajaxPost: true,
            beforeSubmit: function () {

            	//金融资产
                var financial_assets = $("input[name='financial_assets']:checked").val();
                if (!financial_assets) {
                    layer.alert('请选择您的资产是否高于300万元人民币');
                    return false;
                }

                //三年收入
                var three_year_income = $("input[name='three_year_income']:checked").val();
                if (!three_year_income) {
                    layer.alert('请选择您近三年个人年均收入是否高于50万元人民币');
                    return false;
                }

               	//金融资产或三年收入有一项不符
                if(financial_assets == 0 && three_year_income == 0){
                	layer.alert('抱歉，您的金融资产或近三年收入，不满足合格投资人认证！');
                    return false;
                }

                //有过的投资
                var investment_value =[];//定义一个数组      
	            $('input[name="investment[]"]:checked').each(function(){    
	            	investment_value.push($(this).val());   
	            });
                if (investment_value.length < 1) {
                    layer.alert('请选择您是否进行过以下投资');
                    return false;
                }

                //投资经验
                var investment_experience = $("input[name='investment_experience']:checked").val();
                if (!investment_experience) {
                    layer.alert('请选择您的投资经验');
                    return false;
                }
                if($('.investment_no').is(":checked")){
                	layer.alert('抱歉，您没有任何投资经验，不满足合格投资人认证！');
                    return false;
                }

                //融资风险
                var agreement_value =[];//定义一个数组      
	            $('input[name="agreement[]"]:checked').each(function(){    
	            	agreement_value.push($(this).val());   
	            });
                if (agreement_value.length < 1) {
                    layer.alert('您是否已知晓股权融资是一种高风险投资，是一种没有固定收益和固定期限的投资，有产生本金亏损的可能性');
                    return false;
                }
                if(!$('.agreement_1').is(":checked")){
                	layer.alert('您是否已知晓股权融资是一种高风险投资，是一种没有固定收益和固定期限的投资，有产生本金亏损的可能性');
                    return false;
                }
                if(!$('.agreement_2').is(":checked")){
                	layer.alert('您是否阅读并同意签署《注册服务协议》《风险提示书》！');
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