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


    <link rel="stylesheet" type="text/css" href="/Public/Home/css/user.css"/>

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
	<div class="fl w100 usertopbar">
    <div class="content cl">
        <div class="fl">
        <span class="avatar">
            <img id="avatar-img" src="<?php echo get_memberface();?>">
            <span class="avatar-change">修改头像</span>
        </span>
            <b><?php echo get_membername(is_login());?></b>
        </div>
        <div class="ri">
            <a href="<?php echo U('Message/index');?>" class="xx">消息</a>
        </div>
    </div>
</div>
<div class="fl w100 usermain mt15">
    <div class="content">
        <div class="tabs cl">
            
    <ul>
        <li class="cur"><a href="<?php echo U('MCenter/pj_support');?>">支持的项目</a></li>
        <li><a href="<?php echo U('MCenter/pj_create');?>">发起的项目</a></li>
        <li><a href="<?php echo U('MCenter/pj_attach');?>">收藏的项目</a></li>
    </ul>
    <span class="rtlink"><a href="<?php echo U('Project/create');?>" class="fq">+ 发起项目</a></span>

        </div>
        <div class="maincontent cl">
            <div class="userleft fl">
                <ul>
                    <li><em id="c1"></em><a href="<?php echo U('MCenter/pj_support');?>">股权众筹</a></li>
                    <li><em id="c2"></em><a href="<?php echo U('MCenter/pr_support');?>">实物众筹</a></li>
                     <li><em id="c6"></em><a href="<?php echo U('MCenter/stock');?>">基金管理</a></li>
                    <li><em id="c3"></em><a href="<?php echo U('Account/index');?>">账户管理</a></li>
                    <li class="cur"><em id="c4"></em><a href="<?php echo U('User/detail');?>">个人中心</a></li>
                    <li><em id="c5"></em><a href="<?php echo U('Message/index');?>">消息管理</a></li>
                </ul>
            </div>
            
    <div class="userright2 ri">
        <table>
            <thead>
            <tr>
                <th width="120">项目</th>
                <th>项目名称</th>
                <th width="70">发起人</th>
                <th width="70">项目估值</th>
                <th width="70">投资金额</th>
                <th width="70">状态</th>
                <th width="70">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($invest)): $i = 0; $__LIST__ = $invest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="img"><a href="<?php echo U('Project/detail?id='.$vo['project_id']);?>"><img
                            src="<?php echo (get_cover($vo["cover"],'path')); ?>"></a></td>
                    <td><a href="<?php echo U('Project/detail?id='.$vo['project_id']);?>"><?php echo ($vo["project_name"]); ?></a>
                        <em class="date">投资时间：<?php echo (time_format($vo["create_time"],"Y-m-d")); ?></em>
                        <b style="color:red">
                            <?php if($vo["lead_type"] == 2): ?>候选领投人
                                <?php elseif($vo["lead_type"] == 9): ?>
                                领投人<?php endif; ?>
                        </b>
                    </td>
                    <td><a href="<?php echo U('MCenter/profile?id='.$vo['uid']);?>"><?php echo (get_membername($vo["uid"])); ?></a></td>
                    <td>
                        <?php if($vo["stage"] >= 4): echo (change_fund($vo["final_valuation"])); ?>
                            <?php else: ?>
                            未确定<?php endif; ?>
                    </td>
                    <td class="je"><?php echo (change_fund($vo["fund"])); ?></td>
                    <td>
                        <?php if($vo["status"] == 1): ?>未认可
                            <?php elseif($vo["status"] == 2): ?>
                            已认可
                            <?php elseif($vo["status"] == 3): ?>
                            已接受
                            <?php elseif($vo["status"] == 4): ?>
                            确认投资
                            <?php elseif($vo["status"] == 8): ?>
                            协议确认
                            <?php elseif($vo["status"] == 9): ?>
                            已支付
                            <?php else: ?>
                            被拒绝<?php endif; ?>
                    </td>
                    <td class="cz">
                        <?php if($vo["stage"] >= 4): if(($vo["status"] == 3)): ?><a href="<?php echo U('Manage/prepay?id='.$vo['id']);?>">确认投资</a>
                                <?php elseif(($vo["status"] == 4) AND ($vo["acc_status"] == 1)): ?>
                                <a class="pay go-pay" href="<?php echo U('Account/pay?type=1&id='.$vo['id']);?>">支付</a>
                                <?php elseif(($vo["status"] == 4) AND ($vo["acc_status"] != 1) and ($vo["stage"] < 8)): ?>
                                <a href="<?php echo U('Agreement/touzi?id='.$vo['project_id']);?>" class="confirm-agreement">确认协议</a>
                                <?php elseif(($vo["status"] == 8) and ($vo["type"] == 0) and ($vo["stage"] < 8)): ?>
                                <a href="<?php echo U('Agreement/review_touzi?id='.$vo['project_id']);?>" target="_blank">查看协议</a>
                                <a href="<?php echo U('Account/pay?type=1&id='.$vo['id']);?>" class="go-pay">支付</a>
                                <?php elseif(($vo["status"] == 9) and ($vo["type"] == 0)): ?>
                                <a href="<?php echo U('Agreement/review_touzi?id='.$vo['project_id']);?>" target="_blank">查看协议</a>
                                <?php if(($vo["stage"] == 9)): ?><a class="manage" href="<?php echo U('projectAfterInfo/fundedmanagelist?pid='.$vo['project_id']);?>" target="_blank">投后管理</a><?php endif; endif; endif; ?>
                        <?php if(($vo["status"] > 0) AND ($vo["status"] < 9)): if(($vo["lead_type"]) != "9"): ?><a href="<?php echo U('Manage/cancel?id='.$vo['id']);?>" class="invest_cancel">撤消</a><?php endif; endif; ?>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

        </div>
    </div>
</div>
<link rel="stylesheet" href="/Public/static/Jcrop/css/jquery.Jcrop.min.css">


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
<script src="/Public/static/Jcrop/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
<script>
    var upAvatarLayerId = 0;
    $('.usertopbar .avatar').click(function () {
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

    <script type="text/javascript">
        // 指定左侧选中菜单
        var submenu = "<?php echo U('MCenter/pj_support');?>";

        $(".invest_cancel").click(function () {
            if (!confirm("您确定要撤消对该项目的投资吗？")) {
                return false;
            }
            $.get($(this).attr('href'), function (data) {
                if (data.status == 1) {
                    layer.alert(data.info, 9, function () {
                        window.location.reload();
                    });
                } else {
                    layer.alert(data.info, 1);
                }
            });
            return false;
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
<!-- 右侧当前菜单选中状态修改 -->
<script type="text/javascript">
$(document).ready(function() {
	// 左侧菜单选中
	if (typeof(submenu) !== 'undefined') {
		$(".userleft li").removeClass('cur');
		$(".userleft a").each(function(index, el) {
			var href = $(el).attr('href');
		
			if (href == submenu) {
				$(el).parents('li').addClass('cur');
			}
		});	
	}
});
</script>
</body>
</html>