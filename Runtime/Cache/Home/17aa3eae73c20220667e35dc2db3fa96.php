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
	




    <link href="/Public/Home/css/home.css" rel="stylesheet">

    <script type="text/javascript" src="/Public/Home/js/addons.js"></script>

    <div class="bannerlist browse"></div>
    <div class="fl w100 mt20">
        <div class="content">
            <!--分类搜索栏-->
            <div class="selectPanel">
                <div class="nav-title">分类</div>
                <ul class="nav">
                    <li><a
                        <?php if(($type) == "0"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>0,'status'=>$_GET['status'],'p'=>1));?>">全部</a></li>
                    <li><a
                        <?php if(($type) == "1"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>1,'status'=>$_GET['status'],'p'=>1));?>">股权项目</a></li>
                    <li><a
                        <?php if(($type) == "2"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>2,'status'=>$_GET['status'],'p'=>1));?>">实物项目</a></li>
                        
                    <?php if (false): ?>
                    <li><a
                        <?php if(($type) == "3"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>3,'status'=>$_GET['status'],'p'=>1));?>">股票基金</a></li>
                    <?php endif ?>
                </ul>
                <div style="clear:both"></div>
                <div class="nav-title">分类</div>
                <ul class="nav">
                    <li><a
                        <?php if(($status) == "0"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>$_GET['type'],'status'=>0,'p'=>1));?>">全部</a></li>
                    <li><a
                        <?php if(($status) == "3"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>$_GET['type'],'status'=>3,'p'=>1));?>">预热中</a></li>
                    <li><a
                        <?php if(($status) == "1"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>$_GET['type'],'status'=>1,'p'=>1));?>">筹资中</a></li>
                    <li><a
                        <?php if(($status) == "2"): ?>class='active'<?php endif; ?>
                        href="<?php echo U('List/index',array('type'=>$_GET['type'],'status'=>2,'p'=>1));?>">筹资成功</a></li>
                </ul>
            </div>
            <!--分类搜索栏-->

            <div class="page-list">
            </div>
            <ul class="list2 content cl">
                <?php if(is_array($listOfProjects)): foreach($listOfProjects as $key=>$v): if($v["stage"] == 1): ?><li class="yrz">
                            <!--<span class="proj-status yrz"><?php echo (get_proj_stage($v["stage"])); ?></span>-->
                            <?php elseif($v["stage"] == 4): ?>
                        <li class="htz">
                            <!--<span class="proj-status htz"><?php echo (get_proj_stage($v["stage"])); ?></span>-->
                            <?php elseif($v["stage"] == 9): ?>
                        <li class="success">
                            <!--<span class="proj-status success">众筹成功</span>-->
                            <?php else: ?>
                        <li><?php endif; ?>

                    <?php if($v["finish_rate"] >= 100): ?><span class="proj-status cm">项目超募</span><?php endif; ?>
                    <div class="img">
                        <a href="<?php echo U('project/detail?id='.$v['id']);?>">
                            <img src="<?php echo (get_cover($v['cover'],'path')); ?>" alt="<?php echo ($v["project_name"]); ?>股权众筹">
                        </a>
                    </div>
                    <div class="name">
                        <span>股权</span>
                        <a href="<?php echo U('project/detail?id='.$v['id']);?>" title="一塔湖图众筹股权众筹"><?php echo ($v["project_name"]); ?></a>
                    </div>
                    <div class="detail">
                        <dl class="cl">
                            <dd><div><span><?php echo (change_fund($v['need_fund'])); ?></span><span style="font-size: 14px"> 元</span></div>目标额</dd>
                            <dd><div><span><?php if(($v["stage"]) == "1"): ?>0
                                <?php else: ?>
                                <?php echo round($v['finish_rate']); endif; ?></span><span style="font-size: 14px"> %</span></div>已完成
                            </dd>
                            <dd><div><span><?php echo ($v["investor_count"]); ?></span><span style="font-size: 14px"> 人</span></div>投资人</dd>
                        </dl>
                    </div>

                    <?php if($v["stage"] == 1): ?><div class="progress-bar">
                            <span class="yrz"></span><!-- 预热中 -->
                        </div>
                    <?php elseif($v["stage"] == 4): ?>
                        <div class="prograss">
                            <div class="bar animateBar"
                                 data-animatetarget="<?php echo ($v['finish_rate'] > 100 ? 100 :$v['finish_rate']); ?>"
                                 style="width:<?php echo ($v['finish_rate'] > 100 ? 100 :$v['finish_rate']); ?>%;">
                            </div>
                        </div>
                    <?php elseif($v["stage"] == 9): ?>
                        <div class="progress-bar">
                            <span class="success"></span><!-- 众筹成功 -->
                        </div><?php endif; ?>
                    <div class="city"><span><?php echo getDistrict($v['province']);?></span>
                        <span><?php echo getDistrict($v['city']);?></span></div>
                    <?php if($v['stage'] == 4): ?><div class="action"><a href="<?php echo U('project/follow?id='.$v['id']);?>">我要投资</a></div><?php endif; ?>
                    </li><?php endforeach; endif; ?>

                <?php if(is_array($listOfProducts)): foreach($listOfProducts as $key=>$v): ?><li>
                        <div class="img"><a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>" title="一塔湖图众筹实物众筹"><img
                                src="<?php echo (get_cover($v['home_img'],'path')); ?>" alt="<?php echo ($v["name"]); ?>实物众筹"></a></div>
                        <div class="name"><a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>"
                                             title="一塔湖图众筹实物众筹"><?php echo ($v["name"]); ?></a></div>
                        <div class="detail">
                            <dl class="cl">
                                <dd><div><span><?php echo (change_fund($v['amount'])); ?></span><span style="font-size: 14px"> 元</span></div>目标额</dd>
                                <dd><div><span><?php echo round(($v['finish_amount']/$v['amount'])*100);?></span><span style="font-size: 14px"> %</span></div>已完成</dd>
                                <dd><div><span><?php echo ($v["supportCount"]); ?></span><span style="font-size: 14px"> 人</span></div>购买人</dd>
                            </dl>
                        </div>
                        <?php $finish_rate=round(($v['finish_amount']/$v['amount'])*100); $finish_rate = $finish_rate > 100 ? 100 : $finish_rate; ?>
                        <div class="prograss">
                            <div class="bar animateBar"
                                 data-animatetarget="<?php echo ($finish_rate); ?>"
                                 style="width:<?php echo ($finish_rate); ?>%;">
                            </div>
                        </div>
                        <div class="tags"><span><?php echo ($v["tags"]); ?></span></div>
                    </li><?php endforeach; endif; ?>

                <?php if(is_array($listOfStocks)): foreach($listOfStocks as $key=>$v): ?><li>
                        <div class="img"><a href="<?php echo U('stock/index/id/'.$v['id']);?>" title="一塔湖图众筹股票基金众筹"><img
                                src="<?php echo (get_cover($v['logo'],'path')); ?>" alt="<?php echo ($v["name"]); ?>股票基金众筹"></a></div>
                        <div class="name"><a href="<?php echo U('stock/index/id/'.$v['id']);?>"><?php echo ($v["name"]); ?></a></div>
                        <div class="detail">
                            <dl class="cl">
                                <dd><span><?php echo (change_fund($v['amount'])); ?>元</span>总资产</dd>
                                <dd><span><?php echo ($v["investor_count"]); ?>人</span>已加入</dd>
                                <dd><span><?php echo (change_fund($v['over'])); ?>元</span>累计收益</dd>
                            </dl>
                        </div>
                    </li><?php endforeach; endif; ?>
            </ul>
            <div id="pagectrl" class="pagectrl"> <?php echo ($page); ?></div>
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