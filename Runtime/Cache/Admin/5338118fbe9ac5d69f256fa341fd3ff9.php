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
    
<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/static/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/project/preview.css">
    <style type="text/css">
    .form-horizontal .control-label{
    	width: 80px;
    }
    .form-horizontal .controls{
    	margin-left: 100px;
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
		<div class=" clearfix">
			<div class="pull-left pj-left">
			<form action="<?php echo U('project/editIntroduce');?>" class="form-horizontal" method="post">
				<input type="hidden" name="id" value="<?php echo ($projectid); ?>">
				<div class="under-line">
					<div class="com-info">
						<div class="sub-title">项目描述</div>
						<div class="edit-info">
							<textarea name="description" class="span6" rows="5"><?php echo ($description); ?></textarea>
							<?php echo hook('documentEditFormContent', array('name'=>'description', 'value'=>'$info["description"]'));?>
						</div>
					</div>
					<div class="com-info">
						<div class="sub-title">公司未来规划</div>
							<textarea name="plan" class="span6" rows="5"><?php echo ($plan); ?></textarea>
							<?php echo hook('documentEditFormContent', array('name'=>'plan', $value=>'$info["plan"]'));?>
						<div class="edit-info">
						</div>
					</div>
					<div class="com-info">
						<div class="sub-title">目标客户</div>
						<div class="edit-info">
						<textarea name="custom" class="span6" rows="5"><?php echo ($custom); ?></textarea>
						<?php echo hook('documentEditFormContent', array('name'=>'custom', $value=>'$info["custom"]'));?>
						</div>
					</div>
					<div class="com-info">
						<div class="sub-title">盈利模式</div>
						<div class="edit-info">
						<textarea name="yingli_mode" class="span6" rows="5"><?php echo ($yingli_mode); ?></textarea>
						<?php echo hook('documentEditFormContent', array('name'=>'yingli_mode', $value=>'$info["yingli_mode"]'));?>
						</div>
					</div>
					<div class="com-info">
						<div class="sub-title">同业竞争</div>
						<div class="edit-info">
						<textarea name="jingzheng" class="span6" rows="5"><?php echo ($jingzheng); ?></textarea>
						<?php echo hook('documentEditFormContent', array('name'=>'jingzheng', $value=>'$info["jingzheng"]'));?>
						</div>
					</div>
					<div class="com-info">
						<div class="sub-title">竞争优势</div>
						<div class="edit-info">
						<textarea name="avantages" class="span6" rows="5"><?php echo ($avantages); ?></textarea>
						<?php echo hook('documentEditFormContent', array('name'=>'avantages', $value=>'$info["avantages"]'));?>
						</div>
					</div>
				</div>
				<div class="under-line">
					<div class="com-info">
						<h3 class="sub-title">项目大事记
							<small><a href="#" id="addEvent">添加大事记</a></small>
						</h3>
						<div id="happen">
							<table class="tt">
								<thead>
									<tr>
										<th style="width:150px">时间</th>
										<th>内容</th>
										<th width="120px">操作</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($event)): foreach($event as $key=>$v): ?><tr><td> <?php echo (time_format($v["when"],'Y年m月d日')); ?>
										<input type="hidden" name="<?php echo ($v["id"]); ?>">
										<input type="hidden" data-tag="when" value="<?php echo (time_format($v["when"],'Y-m-d')); ?>" name="event[when][]">
										</td>
										<td class="text-left"><?php echo ($v["content"]); ?>
											<input type="hidden" data-tag="content" value="<?php echo ($v["content"]); ?>" name="event[content][]">
										</td>
										<td><a href="javascript:void(0)" id="up-event" onclick="updateEvent(this);">修改</a> | 
										<a href="javascript:void(0)" onclick="removeEvent(this);">删除</a></td>
										</tr><?php endforeach; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div>
				<input type="submit" class="btn btn-large btn-primary" value="提交">
				</div>
			</form>
			</div>

		</div>
	</div>

<!-- Modal 添加、修改大事记 Start-->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <b id="modalTitle">提示信息</b>
	  </div>
	  <div class="modal-body">
	  <div class="form-horizontal">
	    <div class="control-group">
	    	<label for="" class="control-label">发生时间</label>
	    	<div class="controls">
	    		<div class="input-append date">
	    			<input type="text" style="width:150px" id="happen_time" readonly>
	    			<span class="add-on"><i class="icon-calendar"></i></span>
	    		</div>
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label for="" class="control-label">大事记内容</label>
	    	<div class="controls"><textarea class="span3" id="happen_content"></textarea></div>
	    </div>
    	<div class="control-group">
    		<div class="controls">
    			<input type="button" class="btn-red btn-small" id="happen_add" value="确定">
	    		<input type="button" class="btn-yellow btn-small" data-dismiss="modal" aria-hidden="true" value="取消">
    		</div>
    	</div>
	  </div>
	  </div>
	</div><!-- Modal 添加、修改大事记 end-->

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

  <script type="text/javascript" src="/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
	<link href="/Public/static/datetimepicker/css/datetimepicker_normal.css" rel="stylesheet" type="text/css">
	<script>
	highlight_subnav('<?php echo U('Project/index');?>');

	$('.date').datetimepicker({
	    format: 'yyyy-mm-dd',
	    language:"zh-CN",
	    minView:2,
	    pickerPosition:"bottom-left",
	    endDate:new Date(),
		  autoclose:true
	  });

	$("form").submit(function(){
		var self = $(this);
		self.serialize();
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data){
			if(data.status){
				window.location.href = data.url;
			} else {
				alert(data.info);
			}
		}
	});

	var pnt;
	function updateEvent(my) {
		pnt = $(my).parents('tr');
		$('#happen_time').val($(pnt).find("[data-tag='when']").val());
		$('#happen_content').val($(pnt).find("[data-tag='content']").val());

		$('#myModal').modal('show');
		return false;
	}

	function removeEvent(my) {
		$(my).parents('tr').remove();
	}

	$('#addEvent').click(function() {
		pnt = null;
		$('#happen_time').val('');
		$('#happen_content').val('');
		$('#myModal').modal('show');
		return false;
	});

	$("#happen_add").click(function() {
		var date = $("#happen_time").val();
		var content = $("#happen_content").val();
		if (date == '') {
			alert('请输入发生日期。');
			return ;
		} else if (content == '') {
			alert('内容不能为空');
		}
		$("#myModal").modal("hide");
		change_date = date.replace("-", '年');
		change_date = change_date.replace("-", '月') + "日";
		var timeline = '<tr><td>' + change_date + '<input type="hidden" data-tag="when" value="' + 
				date + '" name="event[when][]"></td><td class="text-left">' + content + 
				'<input type="hidden" data-tag="content" value="' + content + '" name="event[content][]"></td>'+
				'<td><a href="javascript:void(0)" id="up-event" onclick="updateEvent(this)">修改</a> | <a href="javascript:void(0)" onclick="removeEvent(this)">删除</a></td></tr>';
		if (pnt != null) {
			$(pnt).after(timeline);
			$(pnt).remove();
		} else {
			$(".tt tbody").append(timeline);
		}
	});
	$('#goback1').click(function() {
		window.location.href = $(this).attr('href');
		return false;
	});
	</script>

</body>
</html>