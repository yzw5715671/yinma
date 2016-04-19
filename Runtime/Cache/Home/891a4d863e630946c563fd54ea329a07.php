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


<link rel="stylesheet" type="text/css" href="/Public/Home/css/user.css" />
<link rel="stylesheet" type="text/css" href="/Public/Home/css/mc_index.css" />
<link rel="stylesheet" href="/Public/static/Jcrop/css/jquery.Jcrop.min.css">

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
	


<div class="mcenter_index" style="margin-top:20px">
  <div class="mc_top">
    <div class="uesr_head fl">
      <span class="avatar">
        <img id="avatar-img" src="<?php echo get_memberface();?>">
        <span class="avatar-change">修改头像</span>
      </span>
      <div class="clear"></div>
      <div class="uesr_name"><?php echo get_membername(is_login());?></div>
      <!-- <div class="uesr_tag">认证投资人</div> -->
    </div>
    <div class="uesr_number fl">
      <ul>
        <!-- <li>您已支持：<a href="<?php echo U('MCenter/pj_support');?>" class="blue_text"><?php echo ($pj_count); ?> </a> 元</li> -->
        <li>您已拥有：<a href="<?php echo U('MCenter/pj_support');?>" class="blue_text"><?php echo ($pj_count); ?> </a>家公司股权</li>
        <li>您已支持：<a href="<?php echo U('MCenter/pr_support');?>" class="blue_text"><?php echo ($pr_count); ?></a>个产品梦想</li>
      </ul>
    </div>
    <!-- <div class="uesr_news fr"><a href="#" class="blue_text">4</a>条消息未读</div> -->
  </div>

  <div class="mc_boxlist">
    <ul>
      <li class="mc_box" style="position: relative;"><a href="<?php echo U('MCenter/pj_support');?>"><em id="mb1"></em><?php if($dolist["pj_qty"] > 0): ?><span class="dolist"><?php echo ($dolist['pj_qty']); ?></span><?php endif; ?>股权众筹</a></li>
      <li class="mc_box" style="position: relative;"><a href="<?php echo U('MCenter/pr_support');?>"><em id="mb2"></em><?php if($dolist["pr_qty"] > 0): ?><span class="dolist"><?php echo ($dolist['pr_qty']); ?></span><?php endif; ?>实物众筹</a></li>
      <li class="mc_box"><a href="<?php echo U('MCenter/stock');?>"><em id="mb3"></em>基金管理</a></li>
      <li class="mc_box"><a href="<?php echo U('Account/index');?>"><em id="mb4"></em>账户管理</a></li>
      <li class="mc_box"><a href="<?php echo U('User/addrlist');?>"><em id="mb5"></em>配送地址</a></li>
      <li class="mc_box"><a href="<?php echo U('User/applylead');?>"><em id="mb6"></em>领投人</a></li>
      <li class="mc_box"><a href="<?php echo U('User/savecenter');?>"><em id="mb7"></em>安全中心</a></li>
      <li class="mc_box"><a href="<?php echo U('User/detail');?>"><em id="mb8"></em>个人资料</a></li>
    </ul>
  </div>
</div>

<div class="up-pic-box" id="up-pic-box" style="">
    <input type="file" id="download" class="up-avatar" name="download">
    <label class="up-pic-label" for="download">上传图片</label>
    <div id="crop-box">
        <img id="crop-img" src="/Public/Home/images/tiny.png">
    </div>
    <div class="up-box-footer">
        <button id="up-avatar-submit">确定</button>
        <button id="up-avatar-cancel">取消</button>
    </div>
    <form id="change-photo-form" action="<?php echo U('User/changePhoto');?>" method="post">
        <input type="hidden" id="avatar-id" name="photo" value="">
        <input type="hidden" id="x" name="x" value="">
        <input type="hidden" id="y" name="y" value="">
        <input type="hidden" id="w" name="w" value="">
        <input type="hidden" id="h" name="h" value="">
        <!--<input type="hidden" id="sw" name="sw">
        <input type="hidden" id="sh" name="sh">-->
        <input type="hidden" name="flag" value="1">
        <input type="hidden" id="basepath" name="basepath" value="/Uploads/Picture/Photo/552521d06b169.jpg">
    </form>
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


<script src="/Public/static/Jcrop/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
<script>
    var upAvatarLayerId = 0;
    $('.mcenter_index .avatar').click(function () {
        var offsetTop = Math.round(($(window).height() - 470) / 2);
        if (offsetTop < 0) offsetTop = 0;
        upAvatarLayerId = $.layer({
            type: 1,
            title: "上传头像",
            offset: [offsetTop + 'px', ''],
            area: ['562px', '470px'],
            page: {dom: '#up-pic-box'}
        });
    });
    var clearCoords = function (c) {
        $('#x').val("");
        $('#y').val("");
        $('#w').val("");
        $('#h').val("");
    };
    var updateCoords = function (c) {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    };
    var jcrop_api;
    $('.up-avatar').change(function () {
        $.upload({
            url: '<?php echo U("File/uploadPhoto");?>',
            fileName: 'download',
            dataType: 'json',
            accept: '.jpg,.jpeg,.png,.gif',
            // 上传之前回调,return true表示可继续上传
            onSend: function () {
                return true;
            },
            // 上传之后回调
            onComplate: function (json) {
                jcrop_api && jcrop_api.destroy();
                var $img = $('#crop-img');
                $img.css({
                    'width': 'auto',
                    'height': 'auto'
                });
                $img.attr('src', json.path);
                $img.on('load', function () {
                    $img.Jcrop({
                        aspectRatio: 1,
                        bgColor: '#eee',
                        boxWidth: 542,
                        boxHeight: 328,
                        setSelect: [0, 0, 100, 100],
                        onSelect: updateCoords,
                        onRelease: clearCoords
                    }, function () {
                        jcrop_api = this;
                    });
                });
                $('#avatar-id').val(json.id);
                $('#basepath').val(json.path);
            }
        });
    });
    $('#up-avatar-submit').click(function () {
        if (!$('#avatar-id').val()) {
            layer.tips('请上传照片', $('#download').get(0), {
                guide: 2,
                style: ['background-color:#0FA6D8; color:#fff; font-size:14px;', '#0FA6D8'],
                time: 2
            });
            return false;
        }
        var $form = $("#change-photo-form");
        var success = function (json) {
            if (json.status) {
                layer.close(upAvatarLayerId);
                $('#avatar-img').attr('src', json.photo_url);
                layer.msg(json.info, 2, 9);
            } else {
                alert(json);
            }
        };
        $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: $form.serialize(),
            success: success,
            error: function () {
                //console.log(arguments)
            }
        });
    });
    $('#up-avatar-cancel').click(function () {
        layer.close(upAvatarLayerId);
    })
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