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
		<div class="clearfix">
			<div class="data-table table-striped">
				<div class="under-line">
					<div class="com-info">
						<h3 class="sub-title">股东团队成员说明 
							<small>
								<a href="<?php echo U('addteam?id='.$projectid);?>" class="addteam">添加成员</a>
							</small>
						</h3>
						<table class="tt">
							<thead>
								<th style="width:50px;">姓名</th>
								<th style="width:100px;">职务</th>
								<th >简介</th>
								<th style="width:100px;">排序</th>
								<th style="width:100px;">操作</th>
							</thead>
							<tbody id="member_key">
								<?php if(is_array($team)): foreach($team as $key=>$v): ?><tr>
									<td><?php echo ($v["name"]); ?></td>
									<td><?php echo ($v["postion"]); ?></td>
									<td><?php echo ($v["member_info"]); ?></td>
									<td><?php echo ($v["sort"]); ?></td>
									<td>
										<a href="<?php echo U('Project/addteam?tid=' . $v['id']);?>">修改</a>
										| 
										<a class="ajax-get confirm" href="<?php echo U('Project/delmember?id=' . $v['id']);?>" data-info="您确定要删除吗?">删除</a>
									</td>
								</tr><?php endforeach; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div>

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
	<script type="text/javascript" src="/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
	<link href="/Public/static/datetimepicker/css/datetimepicker_normal.css" rel="stylesheet" type="text/css">
  	<script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
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

  var valid = $("#myTeam").Validform({
  	tiptype:3,
  	datatype : {
  		number: function(gets) {
  			var reg = /^([0-9]|[0-9]\.\d+|[1-9][0-9]|[1-9][0-9]\.\d+|100)$/;
  			if (!reg.test(gets)) {
  				return '所占股份不能小于0或大于100';
  			}
  		}
  	}
  });

	var _tbody = "";
	var _model = "";
	var _control;
	function showTeam(tbody, model, control) {

		valid.unignore("#fund, #shares");
		_tbody = tbody;
		_model = model;

		$("#member_name").val("");
		$("#postion").val("");
		$("#full_job_n").removeAttr('checked');
		$("#full_job_y").attr("checked","checked");
		$("#shares").val("0");
		$("#fund").val("0");
		$("#relationship").val("");
		$("#sort").val("0");
		$("#in_time").val("");
		$("#member_info").val("");
		if (tbody == "member_key") {
			$(".key").show();
			$(".other").hide();
			if (model == "add") {	 	// 添加股东成员
			} else { 			// 修改股东成员信息
				_control = $(control).parents('tr');
				$("#member_name").val($(_control).find('input:eq(0)').val());
				$("#postion").val($(_control).find('input:eq(1)').val());
				var value = $(_control).find('input:eq(2)').val();
				if (value == '1') {
					$("#full_job_n").removeAttr('checked');
					$("#full_job_y").attr("checked","checked");	
				} else {
					$("#full_job_y").removeAttr('checked');
					$("#full_job_n").attr("checked","checked");
				}
				$("#shares").val($(_control).find('input:eq(3)').val());
				$("#fund").val($(_control).find('input:eq(4)').val());
				$("#relationship").val($(_control).find('input:eq(5)').val());
				$("#member_info").val($(_control).find('input:eq(6)').val());
				$("#sort").val($(_control).find('input:eq(7)').val());
				
			}
		} else {
			valid.ignore("#fund, #shares");
			$(".key").hide();
			$(".other").show();
			if (model == "add") { // 添加非股东成员
			} else {  // 修改非股东成员信息
				_control = $(control).parents('tr');
				$("#member_name").val($(_control).find('input:eq(0)').val());
				$("#postion").val($(_control).find('input:eq(1)').val());
				var value = $(_control).find('input:eq(2)').val();
				if (value == '1') {
					$("#full_job_n").removeAttr('checked');
					$("#full_job_y").attr("checked","checked");	
				} else {
					$("#full_job_y").removeAttr('checked');
					$("#full_job_n").attr("checked","checked");
				}
				$("#in_time").val($(_control).find('input:eq(3)').val());
				$("#relationship").val($(_control).find('input:eq(4)').val());
				$("#member_info").val($(_control).find('input:eq(5)').val());
				$("#sort").val($(_control).find('input:eq(6)').val());
			}
		}
		$("#myTeam").modal("show");
	}

	function addTeam() {
		if (!valid.check()) {
			return;
		}
		if ($("#member_name").val() == '') {
			alert('请填写姓名');
			$(this).parents('control-group').addClass('error');
		}
		if (_tbody == "member_key") {  // 股东成员信息处理
				// 列表信息生成
			var member = "<td>" + $("#member_name").val() + "</td>";
			member += "<input type='hidden' value='" + $("#member_name").val() + "' name=member_key[name][]>";
			member += "<td>" + $("#postion").val() + "</td>";
			member += "<input type='hidden' value='" + $("#postion").val() + "' name=member_key[postion][]>";

			var job = $("input[name=full_job]:checked").val() == "1" ? "全职":"兼职";
			member += "<td>" + job + "</td>";
			member += "<input type='hidden' value='" + $("input[name='full_job']:checked").val() + "' name=member_key[full_job][]>";
			member += "<td>" + $("#shares").val() + "%</td>";
			member += "<input type='hidden' value='" + $("#shares").val() + "' name=member_key[shares][]>";
			member += "<td>" + $("#fund").val() + "</td>";
			member += "<input type='hidden' value='" + $("#fund").val() + "' name=member_key[fund][]>";
			member += "<td>" + $("#relationship").val() + "</td>";
			member += "<input type='hidden' value='" + $("#relationship").val() + "' name=member_key[relationship][]><input type='hidden' name='member_key[member_info][]' value='"+ $("#member_info").val() +"''>";
			member += "<td>" + $("#sort").val() + "</td>";
			member += "<input type='hidden' value='" + $("#sort").val() + "' name=member_key[sort][]>";
			member += "<td><a href=\"javascript:void(0)\" onclick=\"showTeam('member_key','edit', this);\">修改</a> | <a href=\"javascript:void(0)\" onclick=\"memberDelete(this, 'member_other');\">删除</a></td>";
			member += "</tr>";
			if (_model == "add") { // 添加成员信息
				member ="<tr>" + member;
				$("#" + _tbody).append(member);
			} else { // 修改成员信息（先添加新信息，再删除老信息
				member ="<tr>" + member;
				$(_control).after(member);
				$(_control).remove();
			}
		} else {
			if (!valid.check()) {
				return;
			}
			var member = "<td>" + $("#member_name").val() + "</td>";
			member += "<input type='hidden' value='" + $("#member_name").val() + "' name=member_other[name][]>";
			member += "<td>" + $("#postion").val() + "</td>";
			member += "<input type='hidden' value='" + $("#postion").val() + "' name=member_other[postion][]>";
			var job = $("input[name='full_job']:checked").val() == "1" ? "全职":"兼职";
			member += "<td>" + job + "</td>";
			member += "<input type='hidden' value='" + $("input[name='full_job']:checked").val() + "' name=member_other[full_job][]>";
			var date = $("#in_time").val();
			var change_date = date.replace('-', "年");
			change_date = change_date.replace('-', "月") + "日";
			member += "<td>" + change_date + "</td>";
			member += "<input type='hidden' value='" + date + "' name=member_other[in_time][]>";
			member += "<td>" + $("#relationship").val() + "</td>";
			member += "<input type='hidden' value='" + $("#relationship").val() + "' name=member_other[relationship][]><input type='hidden' name='member_other[member_info][]' value='"+$("#member_info").val() +"''>";
			member += "<td>" + $("#sort").val() + "</td>";
			member += "<input type='hidden' value='" + $("#sort").val() + "' name=member_key[sort][]>";
			member += "<td><a href=\"javascript:void(0)\" onclick=\"showTeam('member_other', 'edit', this);\">修改</a> | <a href=\"javascript:void(0)\" onclick=\"memberDelete(this, 'member_other');\">删除</a></td>";
			member += "</tr>";
			if (_model == "add") {  // 添加非股东信息
				var length = $("#" + _tbody).children('tr').length + 1;
				member = "<tr>" + member;
				
				$("#" + _tbody).append(member);
			} else { // 修改非股东成员信息（先添加新信息，再删除老信息
				var number = $(_control).find('td:eq(0)').html();
				member ="<tr>" + member;
				$(_control).after(member);
				$(_control).remove();
			}
		}
		$("#myTeam").modal('hide');
	}
	function memberDelete(control, _tbody) {
		$(control).parents("tr").remove();
		return false;
	}
	$("form").submit(function(){
		var self = $(this);
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

	$('#goback1').click(function() {
		window.location.href = $(this).attr('href');
		return false;
	});
	</script>

</body>
</html>