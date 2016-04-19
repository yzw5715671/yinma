<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|OneThink管理平台</title>
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
<link rel="stylesheet" href="/Public/static/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/project/preview.css">

</head>
<body>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <span class="logo"></span>
        <!-- /Logo -->

        <!-- 主导航 -->
        <ul class="main-nav">
            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (u($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="user-bar">
            <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
            <ul class="nav-list user-menu hidden">
                <li class="manager">你好，<em title="<?php echo session('user_auth.username');?>"><?php echo session('user_auth.username');?></em></li>
                <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
                <li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>
                <li><a href="<?php echo U('Public/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
    <!-- /头部 -->

    <!-- 边栏 -->
    <div class="sidebar">
        <!-- 子导航 -->
        
            <div id="subnav" class="subnav">
                <?php if(!empty($_extra_menu)): ?>
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
                <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                    <?php if(!empty($sub_menu)): if(!empty($key)): ?><h3><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
                        <ul class="side-sub-menu">
                            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
                                    <a class="item" href="<?php echo (u($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>
                    <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->

    <!-- 内容区 -->
    <div id="main-content">
        <div id="top-alert" class="fixed alert alert-error" style="display: none;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
        <div id="main" class="main">
            
            <!-- nav -->
            <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                <span>您的位置:</span>
                <?php $i = '1'; ?>
                <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                    <?php else: ?>
                    <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                    <?php $i = $i+1; endforeach; endif; ?>
            </div><?php endif; ?>
            <!-- nav -->
            

            
<div class="xmsteps" style="background:none">
        <div class="nav-steps clearfix" >
            <ul>
                <li class="<?php $_GET['step']==1?print 'active':''; ?>"><a href="<?php echo U('Project/edit?id=' . $_GET['id'].'&step=1');?>">基本信息</a></li>
                <li class="<?php $_GET['step']==2?print 'active':''; ?>"><a href="<?php echo U('Project/edit?id=' . $_GET['id'].'&step=2');?>">项目介绍</a></li>
                <li class="<?php $_GET['step']==3?print 'active':''; ?>"><a href="<?php echo U('Project/edit?id=' . $_GET['id'].'&step=3');?>">团队介绍</a></li>
                <li class="<?php $_GET['step']==4?print 'active':''; ?>"><a href="<?php echo U('Project/edit?id=' . $_GET['id'].'&step=4');?>">项目资料</a></li>
                <li class="<?php $_GET['step']==5?print 'active':''; ?>"><a href="<?php echo U('Project/edit?id=' . $_GET['id'].'&step=5');?>">融资信息</a></li>
            </ul>
        </div>
	<style type="text/css">
		.value-money:after{
			content: "元";
		}

    	input, button, select {outline: none;}
	#date {font-size: 14px;color: #999;}
	.modal .control-label {width: 100px;}
	.modal .controls {margin-left: 120px;}
	.modal .form-actions {padding-left: 120px;}
	.modal-header {font-size: 18px; line-height: 40px;height: 40px; padding: 0px 15px; background-color: #f0f0f0;}
	.input-append input{
		padding: 0;
	width: 150px;
	margin: 0;
	height: 30px;
		}
	.input-append .add-on{
		top: 2px;
		right: 29px;
	}

	.input-append .add-on, .input-prepend .add-on {
display: inline-block;
width: auto;
height: 20px;
min-width: 16px;
padding: 4px 5px;
font-size: 14px;
font-weight: normal;
line-height: 20px;
text-align: center;
text-shadow: 0 1px 0 #fff;
background-color: #eee;
border: 1px solid #ccc;}
    </style>
	<div class="">
		<div class="clearfix">
			<div class="">
			<form action="<?php echo U('project/editFinancingInfo');?>" class="form-horizontal" method="post">

				<input type="hidden" name="id" value="<?php echo ($projectid); ?>">

				<input type="hidden" name="fund_id" value="<?php echo ($fund["id"]); ?>">
				<div class="under-line">
					<div class="com-info">
						<h3 class="sub-title">融资需求</h3>
					</div>
					<div class="control-group">
						<label for="" class="control-label">项目估值</label>
						<div class="controls">
							<div class="input-append">
								<input type="number" class="account" value="<?php echo (round($fund["project_valuation"],2)); ?>" id="project_valuation" name="fund[project_valuation]">
								<span class="add-on">元</span>
							</div>
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">预融资金额</label>
						<div class="controls">
							<div class="input-append">
								<input type="number" class="account" id="need_fund" value="<?php echo (round($fund["need_fund"],2)); ?>" name="fund[need_fund]">
								<span class="add-on">元</span>
							</div>
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">最低跟投金额</label>
						<div class="controls">
							<div class="input-append">
								<input type="number" class="account" id="follow_fund" value="<?php echo (round($fund["follow_fund"],2)); ?>" name="fund[follow_fund]">
								<span class="add-on">元</span>
							</div>
							<span class="help-inline"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">到账方式</label>
						<div class="controls">
							<select name="fund[to_way]">
								<option value="">请选择到账方式</option>
								<?php if(is_array($to_way)): foreach($to_way as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($fund[to_way] == $v[id]): ?>selected<?php endif; ?> ><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">股东特权</label>
						<div class="controls">
							<textarea name="fund[extra]" class="span4" rows="5" maxlength="150"><?php echo ($fund["extra"]); ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">附加资源</label>
						<div class="controls">
							<input type="text" class="span4" value="<?php echo ($fund["add_source"]); ?>" name="fund[add_source]">
						</div>
					</div>
				</div>
				<div class="under-line">
					<div class="com-info">
						<h3 class="sub-title">资金用途</h3>
					</div>
					<div class="control-group">
						<label for="" class="control-label">资金用途</label>
						<div class="controls">
							<textarea rows="5" class="span4" name="fund[use_to]"><?php echo ($fund["use_to"]); ?></textarea>
						</div>
					</div>
				</div>
						<input type="submit" class="btn btn-large btn-primary" value="提交">

				</form>
			</div>
			
		</div>
	</div>



        </div>
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl">感谢使用<a href="http://www.onethink.cn" target="_blank">OneThink</a>管理平台</div>
                <div class="fr">V<?php echo (ONETHINK_VERSION); ?></div>
            </div>
        </div>
    </div>
    <!-- /内容区 -->
    <script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "/admin.php?s=", //当前项目地址
            "PUBLIC" : "/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="/Public/static/think.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 130);
            }).resize();

            /* 左边菜单高亮 */
            url = window.location.pathname + window.location.search;
            url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
            $subnav.find("a[href='" + url + "']").parent().addClass("current");

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(){
                var $this = $(this);
                $this.find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                      prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });

            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

	        /* 表单获取焦点变色 */
	        $("form").on("focus", "input", function(){
		        $(this).addClass('focus');
	        }).on("blur","input",function(){
				        $(this).removeClass('focus');
			        });
		    $("form").on("focus", "textarea", function(){
			    $(this).closest('label').addClass('focus');
		    }).on("blur","textarea",function(){
			    $(this).closest('label').removeClass('focus');
		    });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
    </script>
    
  <script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
	<script>
	highlight_subnav('<?php echo U('Project/index');?>');

	$('input[type="number"]').keyup(function() {
		this.value=this.value.replace(/\D/g,'');
	});

	// $("form").submit(function() {
	// 	var self = $(this);
	// 	$.post(self.attr("action"), self.serialize(), success, "json");
	// 	return false;
	// 	function success(data){
	// 		if(data.status){
	// 			$.messageBox({
	// 				msginfo: '恭喜！项目信息填写完成，是否马上申请上线审核', 
	// 				showconfirm: true, 
	// 				confirm:function() {
	// 					$.get("<?php echo U('Project/online?id=' . $project_id);?>", function(data) {
	// 						if (data.status) {
	// 							window.location.href = data.url;
	// 						}	
	// 					});
	// 				},
	// 				cancel : function() {
	// 					window.location.href = data.url;
	// 				}
	// 			});
	// 		} else {
	// 			$.messageBox({
	// 				msginfo: data.info
	// 			});
	// 		}
	// 	}
	// });
	$("#confirm").click(function() {
		$.get("<?php echo U('Project/online?id=' . $project_id);?>", function(data) {
			if (data.status) {
				window.location.href = data.url;
				$("#confirm").hide();	
			}	
		});
	});
	$('#goback1').click(function() {
		window.location.href = $(this).attr('href');
		return false;
	});
	</script>

</body>
</html>