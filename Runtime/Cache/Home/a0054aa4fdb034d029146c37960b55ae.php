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
	
	<link href="/Public/Home/css/style.css" rel="stylesheet">
	<style>
		.up_file {
			background-image: url(/Public/Home/images/btn_addattach.jpg);
			opacity: 0;
			width: 72px;
			height: 64px;
			position: absolute;
			margin-left: -140px;
		}
		
		[class^="icon-"], [class*=" icon-"] {
			display: inline-block;
			width: 14px;
			height: 14px;
			margin-top: 1px;
			line-height: 14px;
			vertical-align: text-top;
			background-image:url(/Public/Home/images/glyphicons-halflings.png);
			background-position: 14px 14px;
			background-repeat: no-repeat;
		}
		
		.icon-arrow-left {
			background-position: -240px -96px;
		}
		.icon-arrow-right {
			background-position: -264px -96px;
		}
		.icon-remove {
			background-position: -312px 0;
		}
		
		.form dl dd span.xmtp {
			border: 2px dashed #d9d9d9;
			padding: 15px 10px;
			width: 338px;
			float: left;
			text-align: center;
		}
		.form dl dd input.c1 {
			border: 1px solid #d9d9d9;
			padding: 10px 10px;
			width: 340px;
			font-size: 14px;
			color: #a9a9a9;
			border-radius: 3px;
		}
		.form dl dd input {
			float: left;
		}
		.form dl dd.save {
			border-top: 1px solid #DDDDDD;
			color: #ff5a5a;
			font-size: 12px;
			margin-top: 20px;
			padding: 20px 0;
			text-align: right;
		}
		.form dl dd.save input{
			border-radius: 4px;
		}
		.form dl dd input.s {
			background: #ff5a5a;
			border: none;
			color: #fff;
			font-size: 14px;
			padding: 10px 30px;
			cursor: pointer;
			margin-left: 10px;
			float: none;
		}

		.form dl dd {
			padding: 5px 0;
			float: left;
			width: 100%;
		}
	</style>




	<div class="fl w100 mainwrap mt25">
	<div class="content">
    	<div class="bread"><a href="#">首页</a>　>　发起梦想</div>
        <div class="main mt20 mainleftbg">
        	<dl class="cl">
        	<dd class="leftbar">
            	<div class="userhaed"><img src="<?php echo get_memberface();?>"><?php echo get_membername(is_login());?></div>
                <ul id="leftlist">
                	<li><em id="c1"></em><a href="<?php echo U('Project/addstep1?id='.$project_id);?>">基本信息</a><span></span></li>
                    <li><em id="c3"></em><a href="<?php echo U('Project/addstep2?id='.$project_id);?>">项目介绍</a></li>
                    <li><em id="c2"></em><a href="<?php echo U('Project/addstep3?id='.$project_id);?>">团队介绍</a></li>
                    <li class="cur"><em id="c4"></em><a href="<?php echo U('Project/addstep4?id='.$project_id);?>">项目资料</a></li>
                    <li><em id="c5"></em><a href="<?php echo U('Project/addstep5?id='.$project_id);?>">融资信息</a></li>
                    <li><em id="c6"></em><a href="<?php echo U('Project/addstep6?id='.$project_id);?>">提交项目</a></li>
                </ul>
            </dd>
            <dd class="rightbar">
            	<h2>项目资料</h2>
            	<form name="project_add" id="project_add" action="" method="POST" class="form-horizontal">
				<div class="form">
				<dl>
					<dd>
					  <label>宣传图片</label>
					  <span class="xmtp">
					  	<a href="#">
							<input type="file" class="up_file" style="width:338px;height:40px;" name="download" id="download" onchange="upload_image('download');">
						 </a>上传宣传图片
					  </span>
					</dd>
					<dd>
					<ul class="imglist clearfix">
					    <?php if(is_array($temp)): foreach($temp as $key=>$v): ?><li>
					    		<div class="image-box">
					            	<img src="<?php echo (get_cover($v["info_key"],'path')); ?>" alt="">
					            </div>
					           	<input type="hidden" name="temp[]" value="<?php echo ($v["info_key"]); ?>" class="pathid">
					            <div class="box-tools">
					                <a class="arrow arrow-left" href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
					                <a class="arrow arrow-right" href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
					                <a class="remove" href="javascript:void(0)"><i class="icon-remove"></i></a>
					            </div>
					        </li><?php endforeach; endif; ?>
					    </ul>
					</dd>
					<dd>
					  <label>相关视频</label>
					  <input type="text" class="c1" id="title" name="temp-move" value="<?php echo ($temp_move); ?>" placeholder="仅适用于优酷、土豆、酷六视频链接">
					</dd>
					<dd class="save">
					  <input type="submit" value="保存" class="s">
					</dd>
				</dl>
			</div>
			</form>
    	</dd>
    	</dl>
    </div>
    </div>
</div>
	<ul style="display:none;">
		<li class="image-temp">
			<div class="image-box">
				<img src="" alt="">
			</div>
			<input type="hidden" name="temp[]" class="pathid">
			<div class="box-tools">
				<a class="arrow arrow-left" href="javascript:void(0)"><i class="icon-arrow-left"></i></a>
				<a class="arrow arrow-right" href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
				<a class="remove" href="javascript:void(0)"><i class="icon-remove"></i></a>
			</div>
		</li>
	</ul>

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

  <script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
    <script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
	<script type="text/javascript" >

	
		$("#project_add").Validform({
			tiptype:3,
			btnSubmit:"#confirm",
			ajaxPost:true,
			beforeCheck:function(curform){
				//在验证成功后，表单提交前执行的函数，curform参数是当前表单对象。
				//这里明确return false的话表单将不会提交;	
				var length = $(".imglist li").length;
				if (length == 0) {
					alert('请至少添加一张宣传图片。');
					return false;
				}
				
			},
			callback:function(data){
				if (data.status == 1) {
					//alert('添加成功');
					//window.location.href = data.url;
					layer.alert(data.info, 1, function() {window.location.href = data.url;});
				}else{
					layer.alert(data.info, 5);
				}
			}
		});
		
		//上传缩略图
		function upload_image(upfile_name){
	        $.upload({
		          url: '<?php echo U("File/uploadProj");?>', 
		          fileName: upfile_name, 
		          dataType: 'json',
		          accept: '.jpg,.jpeg,.png,.gif',
		          // 上传之前回调,return true表    示可继续上传
		          onSend: function() {
		              return true;
		          },
		          // 上传之后回调
		          onComplate: function(data) {
		        	  uploadPhoto(data);
		          }
			});
		}
		
		function uploadPhoto(data){
		    var src = '';
		    if(data.status){
		    	var clone = $(".image-temp").clone(true);
		    	clone.find('.pathid').val(data.id);
		    	clone.removeClass('image-temp')
		      	src = data.url || '' + data.path;
		    	clone.find('img').attr('src', src);
		    	$(".imglist").append(clone);
		    	clone.show('500');
		    } else {
		      alert('上传失败');
		    }
		}
		
	    $(document).ready(function() {
	    	// 宣传图片位置调整(往前调整)
	    	$(".arrow-left").click(function() {
	    		var my = $(this).parents("li");
	      		var prev = $(my).prev('li');
		      	if (prev != null && prev.is('li')) {
		    			$(my).hide('500', function() {
		      			$(prev).before($(my));
		        		$(my).show('500');
		    			});
		      	}
	    	});

	    	// 宣传图片删除
	    	$(".remove").click(function() {
	    		var my = $(this).parents("li");
	    		$(my).hide('500', function() {
	    			$(my).remove();
	    		});
	    	});
	        
	    	$(".arrow-right").click(function() {
	    		var my =$(this).parents("li");
	    		var next = $(my).next('li');
	      	
	      	if (next != null && next.is('li')) {
	    			$(my).hide('500', function() {
	      		
	        		$(next).after($(my));	
	        		$(my).show('500');
	        	});
	    	  }
	      });
	        
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