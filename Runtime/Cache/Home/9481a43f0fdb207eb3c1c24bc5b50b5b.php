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
			background: url('/Public/Home/images/btn_addattach.jpg');
			opacity: 0;
			width: 72px;
			height: 64px;
			position: absolute;
			margin-left: -78px;
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
                    <li  class="cur"><em id="c2"></em><a href="<?php echo U('Project/addstep3?id='.$project_id);?>">团队介绍</a></li>
                    <li><em id="c4"></em><a href="<?php echo U('Project/addstep4?id='.$project_id);?>">项目资料</a></li>
                    <li><em id="c5"></em><a href="<?php echo U('Project/addstep5?id='.$project_id);?>">融资信息</a></li>
                    <li><em id="c6"></em><a href="<?php echo U('Project/addstep6?id='.$project_id);?>">提交项目</a></li>
                </ul>
            </dd>
            <dd class="rightbar">
            	<h2>团队介绍</h2>
            	<form name="project_add" id="project_add" action="" method="POST" class="form">
					<ul>
					<div class="tjtd">
						<?php if(is_array($team)): foreach($team as $key=>$v): ?><li class="xmms">
								<div class="fl2"><img src="<?php echo (get_cover($v["header_img"],'path')); ?>" style=""></div>
					    		<ul class="fr2">
									<li>姓名：<?php echo ($v["name"]); ?></li>
					            	<li>职务：<?php echo ($v["postion"]); ?></li>
					               	<li>简介：<?php echo ($v["member_info"]); ?></li>
					               	<li class="bs">
					               		<a href="#" data-pricedata="<?php echo U('project/getmemberinfo?id='.$v['id']);?>" class="bj edit_member">编辑</a>
					               		<a href="<?php echo U('project/delmember?id='.$v['id']);?>" class="del_member">删除</a>
					               	</li>
								</ul>
							</li><?php endforeach; endif; ?>
					
						
				   		<div class="w_adda hide">
				     		<input type="button" class="btn_red" id="addBack" value="添加团队成员">
				      	</div>
						<div class="w_addInfo" style="display: none;">
				  			<li class="addattach">
					      		<label><em>*</em>上传头像</label>
					       		<span class="fl">
									<a href="#">
										<img src="/Public/Home/images/btn_addattach.jpg" class="fl" width="72" height="64" style="margin-right:10px;">
										<input type="file" class="up_file" name ="header_img" id="header_img" onchange="upload_image('header_img');">
									</a>
									
									<?php if(!empty($header_img)): ?><img id = "header_img_view" src="<?php echo (get_cover($header_img,'path')); ?>"  alt="" style="width:100px;height:100px;" />
									<?php else: ?>
										<img id = "header_img_view" src=""  alt="" style="" /><?php endif; ?>
									大小不超过2M，建议尺寸：180*180px
								</span>
								<input type="hidden" name="header_img" id="hidheader_img" value="<?php echo ($header_img); ?>" datatype="*" nullmsg="请上传头像">
				       		</li>
				   			<li>
				        		<label><em>*</em>姓名：</label>
								<input type="text" class="c1" id="name" value="" name="name" placeholder="请输入团队人员姓名" datatype="*1-10" nullmsg="请输入团队人员姓名" errormsg="姓名不能超过10个汉字">
				           	</li>
				         	<li>
				         		<label><em>*</em>职务：</label>
				          		<input type="text" class="c1" id="postion" value="" name="postion" placeholder="请输入团队人员职务" datatype="*" nullmsg="请输入团队人员职务" >
				         	</li>
				         	<li>
				         		<label>排序：</label>
				          		<input type="text" class="c1" id="sort" value="0" name="sort" >(越小越靠前，默认0)
				         	</li>
				       		<li>
				        		<label><em>*</em>简介：</label>
				           		<textarea name="member_info" id="member_info" cols="" rows="" class="c2" placeholder="请输入团队人员简介" datatype="*" nullmsg="请输入团队人员简介"></textarea>
				          	</li>
				       		<li class="bq">
				        		<input type="hidden" name ="team_id" id="team_id" value="">
				            	<input type="button" value="取消" id="cancle" class="qx">
				            	<input type="submit" value="添加" class="s">
				        	</li>
						</div>
					</div>
					<li class="save">
					  <a href="<?php echo U('Project/addstep4?id='.$project_id);?>"><input type="button" class="s" value="下一步"></a>
					</li>
				</ul>
			</form>
            </dd>
            </dl>
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

	<link href="/Public/Home/css/validform.css" rel="stylesheet">
	<script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
	<script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jQselect.js"></script>
  <script type="text/javascript">

	//上传缩略图
	function upload_image(upfile_name){
		var viewImg = '#' + upfile_name + '_view';
		var hidfileName = '#hid' + upfile_name;
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
	            if(data.status == 1) {
	            	$(viewImg).attr('src', data.path);
	            	$(viewImg).attr('style', 'width:100px;height:100px;');
	          		$(hidfileName).val(data.id);
	            } else {
	                alert(data.info);
	            }
	          }
		});
	}
	
  $(function(){
	  //显示添加部分
	  $("#addBack").click(function(){
	    $(".w_adda").hide(function(){
	      $(".w_addInfo").fadeIn();
	    });
	  });
	  //隐藏部分
	  $("#cancle").click(function(){
  	  	$("#team_id").attr('value','');
		$("#hidheader_img").attr('value','');
		$("#header_img_view").attr('src','');
		$("#header_img_view").attr('style', '');
		$("#name").attr('value','');
		$("#postion").attr('value','');
		$("#member_info").html('');
		$("#sort").attr('value','0');
		
	    $(".w_addInfo").fadeOut(function(){
	      $(".w_adda").show();
	    });
	  });

		$(".del_member").click(function() {
			  if (!confirm('您确定要删除该条记录吗？')) {return false;}
			  $.get($(this).attr('href'), function(data) {
			    if (data.status == 1) {
			      layer.alert(data.info, 1, function() {window.location.reload();});
			    } else {
			      layer.alert(data.info, 5);
			    }
			  });
			  return false;
			});

		
	  // 编辑。。。。
	  $(".edit_member").click(function(){
		 	$.get($(this).data('pricedata'),function(data){
	   
	      if (data.status==1) {
	    	  	$("#team_id").attr('value',data.info.id);
				$("#hidheader_img").attr('value',data.info.header_img);
				$("#header_img_view").attr('src',data.info.image_url);
				$("#header_img_view").attr('style', 'width:100px;height:100px;');
				$("#name").attr('value',data.info.name);
				$("#postion").attr('value',data.info.postion);
				$("#member_info").html(data.info.member_info);
				$("#sort").attr('value',data.info.sort);
				//layer.alert(data.info, 1, function() {window.location.reload();});
	      }else{
	    	  //layer.alert(data.info, 5);
	        return false;
	      };
	    });

	    $(".w_adda").hide(function(){
	      $(".w_addInfo").fadeIn();
	    });
	  });

		
	})
	$("#project_add").Validform({
			tiptype:3,
			ajaxPost:true,
			callback:function(data){
				if (data.status == 1) {
					//alert('添加成功');
					//window.location.href = data.url;
					window.location.reload();
				}else{
					alert(data.info);
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