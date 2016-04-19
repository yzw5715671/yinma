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
    <style type="text/css">
    .form-horizontal .control-label{
    	width: 80px;
    }
    .form-horizontal .controls{
    	margin-left: 100px;
    }
    </style>

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
            

            
    <script type="text/javascript" src="/Public/static/uploadify/jquery.uploadify.min.js"></script>

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
	<div class="" style="margin-top:20px;">
		<div class="clearfix">
			<div class="pull-left">
			<div class="form-horizontal">
			<form action="<?php echo U('project/editBaseInfo');?>" class="form-horizontal" method="post">
				<input type="hidden" name="id" value="<?php echo ($projectid); ?>">

				<div class="under-line">
				
					<div class="control-group">
						<label for="" class="control-label">项目图片</label>
						<div class="controls">
				                <input type="file" id="upload_picture_logo">
								<input type="hidden" id="project_img_val" name="project[cover]" value="<?php echo ($cover); ?>" datatype="*" nullmsg="请上传项目图片">
				                <div class="upload-img-box">
									<img src="<?php echo (get_cover($cover,'path')); ?>" alt="" style="width:300px;height:200px;">
				                </div>
	
				            <script type="text/javascript">
				            //上传图片
				            /* 初始化上传插件 */
				            $("#upload_picture_logo").uploadify({
				                "height"          : 30,
				                "swf"             : "/Public/static/uploadify/uploadify.swf",
				                "fileObjName"     : "download",
				                "buttonText"      : "上传图片",
				                "uploader"        : "<?php echo U('File/uploadPicture',array('session_id'=>session_id()));?>",
				                "width"           : 120,
				                'removeTimeout'   : 1,
				                'fileTypeExts'    : '*.jpg; *.png; *.gif;',
				                "onUploadSuccess" : uploadPicture,
				                'onFallback' : function() {
				                    alert('未检测到兼容版本的Flash.');
				                }
				            });
				            function uploadPicture(file, data){
				                var data = $.parseJSON(data);
				                var src = '';
				                if(data.status){
				                    $("#project_img_val").val(data.id);
				                    src = data.url || '' + data.path
				                    $("#project_img_val").parent().find('.upload-img-box').html(
				                        '<div class="upload-pre-item"><img src="' + src + '"/></div>'
				                    );
				                } else {
				                    updateAlert(data.info);
				                    setTimeout(function(){
				                        $('#top-alert').find('button').click();
				                        $(that).removeClass('disabled').prop('disabled',false);
				                    },1500);
				                }
				            }
				            </script>
						</div>
					</div>
				
					<div class="control-group">
						<label for="" class="control-label">项目标题</label>
						<div class="controls">
							<input type="text" class="span6" datatype="*1-30" value='<?php echo ($project_name); ?>' name="project[project_name]">
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">项目简介</label>
						<div class="controls">
							<textarea style="width:340px;height:150px;" name="project[abstract]" datatype="*1-100" errormsg="项目简介不能超过100个字" nullmsg="请填写项目描述"><?php echo ($abstract); ?></textarea>
						
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
				
<!-- 				<div class="control-group">
					<label class="control-label">项目类型</label>
					<div class="controls">
						<?php if($type == 0): ?><label class="radio inline"><input type="radio" name="project[type]" checked id="" value="0">股权投资</label>
							<label class="radio inline"><input type="radio" name="project[type]" id="" value="1">兴趣合营</label>
						<?php else: ?>
							<label class="radio inline"><input type="radio" name="project[type]" id="" value="0">股权投资</label>
							<label class="radio inline"><input type="radio" name="project[type]" checked id="" value="1">兴趣合营</label><?php endif; ?>	
						<span class="help-inline Validform_checktip"></span>
					</div>
				</div> -->
				
					<div class="control-group">
						<label for="" class="control-label">查看权限</label>
						<div class="controls">
							<?php if(empty($project)): if($open_flag == 1): ?><label class="radio inline">
									<input type="radio" checked="checked" name="project[open_flag]" value="1">所有投资人
								</label>
								<label class="radio inline">
									<input type="radio" name="project[open_flag]" value="2">审核通过的投资人
								</label>
	
							<?php else: ?>
								<label class="radio inline">
									<input type="radio" name="project[open_flag]" value="1">所有投资人
								</label>
								<label class="radio inline">
									<input type="radio" checked="checked" name="project[open_flag]" value="2">审核通过的投资人
								</label><?php endif; endif; ?>
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">公司名称</label>
						<div class="controls">
							<input type="text" name="project[company_name]" placeholder="请输入你的公司名称" datatype="*1-30" nullmsg="请输入你的公司名称" errormsg="公司地址不能超过30个汉字" class="span4" value="<?php echo ($company_name); ?>">
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					
					<div class="control-group">
						<label for="" class="control-label">所在城市</label>
						<div class="controls">
							<?php echo hook('J_China_City', array('province'=>$province, 'city'=>$city));?>
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">公司地址</label>
						<div class="controls">
							<input type="text" name="project[address]" ignore="ignore" class="span4" nullmsg="请输入公司地址" errormsg="公司地址不能超过30个汉字" datatype="*1-30" value="<?php echo ($address); ?>">
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">项目网址</label>
						<div class="controls">
							<input type="text" name="project[project_url]" ignore="ignore" datatype="url" class="span4" value="<?php echo ($project_url); ?>">
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
				
<!-- 				<div class="control-group">
					<label for="" class="control-label">发展阶段</label>

					<div class="controls">
						<select name="project[step]" datatype="*" nullmsg="请选择发展阶段">
							<option value="<?php echo ($stepname); ?>"><?php echo (get_code_name($stepname)); ?></option>
							<?php if(is_array($step)): foreach($step as $key=>$v): if($v[id] == $project[step]): ?><option value="<?php echo ($v["id"]); ?>" selected><?php echo ($v["name"]); ?></option>
							<?php else: ?>
							<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
						</select>
					</div>
				</div> -->
				
					<div class="control-group">
						<label for="" class="control-label">所属行业</label>
						<div class="controls">
							<select name="project[industry]" datatype="*" nullmsg="请选择所属行业">
								<option value="<?php echo ($industry); ?>"><?php echo ($industryName); ?></option>
								<?php if(is_array($industry)): foreach($industry as $key=>$v): if($v[id] == $project[industry]): ?><option value="<?php echo ($v["id"]); ?>" selected><?php echo ($v["name"]); ?></option>
								<?php else: ?>
								<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
							</select>
						</div>
					</div>
	
					<div class="control-group">
						<label for="" class="control-label">所处阶段</label>
						<div class="controls">
							<select name="project[project_phase]" nullmsg="请选择项目阶段">
								<option value="<?php echo ($project_phase); ?>"><?php echo (get_code_name($project_phase)); ?></option>
								<?php if(is_array($project_phase_list)): foreach($project_phase_list as $key=>$v): if($project['project_phase'] == $v['id']): ?><option value="<?php echo ($v["id"]); ?>" selected><?php echo ($v["name"]); ?></option>
								<?php else: ?>
								<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; endforeach; endif; ?>
							</select>
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
					<div class="control-group">
						<label for="" class="control-label">团队人数</label>
						<div class="controls">
							<input type="number" name="project[member_count]" nullmsg="请输入团队人数" errormsg="人数应该1-9999之间" datatype="n1-4" value="<?php echo ($member_count); ?>">
							<span class="help-inline Validform_checktip"></span>
						</div>
					</div>
				</div>

				<input type="submit" class="btn btn-large btn-primary" value="提交">

				</div> <!-- under-line end -->
				</div>
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
  <script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
	<script>
	$("form").Validform({tiptype:3
	});

	highlight_subnav('<?php echo U('Project/index');?>');
		$("#Validform_msg").hide();

	</script>

</body>
</html>