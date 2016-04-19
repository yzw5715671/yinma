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
	





    <link href="/Public/Home/css/detail.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Home/css/style.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/addons.js"></script>
    <script type="text/javascript" src="/Public/Home/js/highcharts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/exporting.js"></script>
    <script type="text/javascript" src="/Public/Home/js/highcharts-more.js"></script>
    <script type="text/javascript" src="/Public/Home/js/detail.js"></script>

    <div class="fl w100 mainwrap mt25">
        <div class="content" id="detail">
            <div class="bread">
                <a href="<?php echo U('Index/index');?>">首页</a>　>　
                <a href="<?php echo U('List/index');?>">实物众筹项目</a>　>　<?php echo ($name); ?>
            </div>
            <div id="jiathis">
                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style_24x24">
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_cqq"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                </div>

                <!-- JiaThis Button END -->
            </div>
            <div class="topinfo mt15 cl">
                <div class="img fl">
                    <div class="noimg">
                        <?php if($finish_progress_num > 100): ?><span class="super_raise icon_y">已超募</span><?php endif; ?>
                        <?php if($stage == 1): ?><img data-pinit="registered" src="<?php echo (get_cover($hot_img,'path')); ?>" alt="实物众筹" class="cover-img"
                                 style="width:100%;height:100%;">
                            <?php else: ?>
                            <img data-pinit="registered" src="<?php echo (get_cover($home_img,'path')); ?>" alt="实物众筹" class="cover-img"
                                 style="width:100%;height:100%;"><?php endif; ?>

                    </div>
                </div>
                <div class="infos ri">
                    <h4><?php echo ($name); ?></h4>
                    <p class="sintro"><?php echo ($abstract); ?></p>
                    <dl class="rzxx cl">
                        <dd><div><span><?php echo ($resultSupport); ?></span></div>支持人数</dd>
                        <dd><div><span><?php
 if ($days - floor((time()-$start_time)/86400) >0) { print $days - floor((time()-$start_time)/86400) ;} else { print 0;} ?></span><span style="font-size: 14px">天</span></div>剩余天数
                        </dd>
                        <dd><div><span><?php echo ($finish_progress_num); ?></span><span style="font-size: 14px">%</span></div>已完成</dd>
                    </dl>
                    <div class="savestep_detail cl"><i
                            style="width:<?php echo ($finish_progress_num > 100 ? 100 :$finish_progress_num); ?>%;"></i>
                        <div class="bg"></div>
                    </div>
                    <p style="line-height:24px;">此项目必须在<b
                            style="font-size:14px;color: #f35d5d;"><?php print date('Y年m月d日',$start_time+86400*$days); ?></b>前得到<b
                            style="font-size:18px;color: #f35d5d;">￥<?php echo ($amount); ?></b>的支持才可能成功</p>
                    <div class="cz cl">
                        <div class="zan">
                            <a id="a_focus" href="javascript:;" data-url="<?php echo U('Product/focus?pid='.$pid);?>" class="c2"><?php echo ($like_record); ?></a>

                            <a href="javascript:;" url="" class="c4"><?php echo ($read_record); ?></a>
                        </div>
                        <div class="yzje"><b><span style="font-size: 18px">￥</span><?php echo round($finish_amount);?></b>已筹金额</div>
                    </div>
                </div>
            </div>
            <div class="tagsbar">

                <a href="#" class="tags"><?php echo ($tags); ?></a>
            </div>

            <div class="intro_detail mt20">
                <div class="xm fl xm2">
                    <div class="smenu cl">
                        <ul>
                            <li id="one1" onclick="setTab('one',1,3)" class="cur">项目主页</li>
                            <li id="one2" onclick="setTab('one',2,3)" class="">支持者<em>（<?php echo ($resultSupport); ?>） </em></li>
                            <li id="one3" onclick="setTab('one',3,3)">项目评论<em>(<?php echo ($product["com_count"]); ?>)</em></li>
                        </ul>
                    </div>
                    <!--tab1-->
                    <div class="hover" id="con_one_1">
                        <div class="c11 mintro">
                            <!--<div class="noimg">
                            <?php  if (!empty($resultInfo['video_path'])) :?>
                                <embed src="<?php echo ($resultInfo["video_path"]); ?>" allowFullScreen="true" quality="high" width="625" height="395" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
                            <br />
                            <?php endif;?></div>-->
                            <p><?php echo ($resultInfo["content"]); ?></p>

                        </div>
                    </div>
                    <!--tab1-->
                    <!--tab2-->
                    <div class="c11 mintro tzz" id="con_one_2" style="display:none;">
                        <div class="supporter-box">

                        </div>
                    </div>

                    <!--tab2-->
                    <!--tab3-->
                    <div class="c11 mintro xmpl" id="con_one_3" style="display: none;">

                        <h4 class="c2"><i></i>项目评论</h4>
                        <div class="c11 mintro xmpl" id="con_one_3" style="display: block;"><!--注意：下方与之前的详情页有点不同-->
                            <header>还可以输入 <span id="content-count">140</span> 字</header>
                            <!--注意：增加项-->
                            <ul class="mes">
                                <li>
                                    <div id="replyw" class="reply" style="margin-top:10px;"><textarea
                                            id="project-comment" maxlength="140" name="" cols="" rows=""
                                            class="border1 comment-comment"
                                            style="width:100%; height:150px;"></textarea><a href="#"
                                                                                            id="btn-project-comment">评论</a>
                                    </div>
                                </li>
                            </ul>
                            <div id="comment-box">

                            </div>
                        </div>
                    </div>
                    <!--tab3-->

                    <div class="c11 mintro">
                        <h4 class="c2"><i></i>推荐项目</h4>
                        <div class="tjxm_body">
                            <div class="bx_wrap">
                                <!--  	<a href="/" class="prev">上一个</a>
                                     <a href="/" class="next">下一个</a> -->
                                <div class="bx_container">
                                    <!--<ul id="tjxm">
                                        <?php if(is_array($recomendList['project'])): foreach($recomendList['project'] as $key=>$v): ?><li><a href="<?php echo U('project/detail?id='.$v['id']);?>" title="一塔湖图众筹股权众筹"><img src="<?php echo (get_cover($v['cover'],'path')); ?>"  alt="<?php echo ($v["project_name"]); ?>股权众筹"><?php echo ($v["project_name"]); ?></a></li><?php endforeach; endif; ?>
                                        <?php if(is_array($recomendList['product'])): foreach($recomendList['product'] as $key=>$v): ?><li><a href="<?php echo U('product/viewdetail/pid/'.$v['id']);?>" title="一塔湖图众筹实物众筹"><img src="<?php echo (get_cover($v['home_img'],'path')); ?>"  alt="<?php echo ($v["name"]); ?>实物众筹"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                                    </ul>-->

                                    <ul id="tjxm">
                                        <?php if(is_array($recomendList['project'])): foreach($recomendList['project'] as $key=>$v): ?><li><a href="<?php echo U('project/detail?id='.$v['id']);?>" title="一塔湖图众筹股权众筹"><img
                                                    src="<?php echo (get_cover($v['cover'],'path')); ?>"><?php echo ($v["project_name"]); ?></a></li><?php endforeach; endif; ?>
                                        <?php if(is_array($recomendList['product'])): foreach($recomendList['product'] as $key=>$v): ?><li><a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>" title="一塔湖图众筹实物众筹"><img
                                                    src="<?php echo (get_cover($v['home_img'],'path')); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--右侧 start-->
                <div class="sw_detail_right ri">
                    <div class="fqr cl">
                        <a href="<?php echo U('MCenter/profile?id='. $uid);?>"><img src="<?php echo (get_memberface($uid)); ?>" class="header"><b><?php echo (get_membername($uid)); ?></b></a>发起人
                    </div>
                    <!-- 					<div class="border1 mt15 zc">
                                            <header class="cl"><b>无私支持</b><span>XX人支持</span></header>
                                            <article>
                                                 <p>感谢您的无私奉献，这份捐赠将助我们的梦想飞的更高更远。</p>
                                                  <a href="实物详情页－提交订单.html" class="c1">无私支持</a>
                                              </article>
                                        </div> -->
                    <?php if(is_array($resultPrice)): foreach($resultPrice as $key=>$vo): ?><div class="border1 mt15 zc">
                            <header class="cl"><b>￥<?php echo ($vo["amount"]); ?></b>
                                <span><?php echo ($vo['sell_count']); ?>人支持(<?php if($vo["count"] == 0): ?>不限
                                    <?php else: ?>
                                    限购 <?php echo ($vo["count"]); ?>人<?php endif; ?> )</span></header>
                            <article>
                                <p><?php echo (nl2br($vo["content"])); ?></p>
                                <?php if(($status == 9) and ($stage == 2)): if($vo[count] == 0): ?><a href="<?php echo U('productOrder/info?priceId='.$vo['id'].'&customid='.$customid);?>"
                                           class="c1">
                                            <?php if($vo["is_luck"] == 1): ?>碰碰运气
                                                <?php else: ?>
                                                支持￥<?php echo ($vo["amount"]); endif; ?>
                                        </a>
                                        <?php else: ?>
                                        <?php if(($vo['count']-$vo['sell_count']) < 1):?>
                                        <a href="javascript:void(0)" onclick="" class="c1_g">已售罄</a>
                                        <?php else:?>
                                        <a href="<?php echo U('productOrder/info?priceId='.$vo['id'].'&customid='.$customid);?>"
                                           class="c1">
                                            <?php if( $vo["is_luck"] == 1): ?>碰碰运气
                                                <?php else: ?>
                                                支持￥<?php echo ($vo["amount"]); endif; ?>
                                        </a>
                                        <?php endif; endif; endif; ?>
                                <p>
                                    <?php if($vo[post_amount] == 0): ?>包邮
                                        <?php else: ?>
                                        邮费:￥<?php echo ($vo["post_amount"]); endif; ?>
                                    <br>预计发放时间：项目成功结束后<?php echo ($vo["afterday"]); ?>天内
                                </p>
                                <?php if($vo['pid'] == 1): if($vo['id'] == 1): ?><div style="text-align: center;">
                                            <img src="/Public/Home/images/barcode/jn1535.png" class="header">
                                        </div>
                                        <?php else: ?>
                                        <div style="text-align: center;">
                                            <img src="/Public/Home/images/barcode/jn535.png" class="header">
                                        </div><?php endif; endif; ?>

                            </article>
                        </div><?php endforeach; endif; ?>
                </div>
                <!--右侧 end-->
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

    <script type="text/javascript" src="/Public/static/jquery.upload.js"></script>
    <script type="text/javascript" src="/Public/static/Validform_v5.3.2.js"></script>
    <script type="text/javascript">
        var projectId = location.href.match(/pid\/(\d+)\.html/);
        projectId = parseInt(projectId && projectId[1]) || 0;
        var config = {projectCommentAPI: '/product/comment/'};

        //$(".popup").colorbox(); // 跟投按钮处理
        $.get('<?php echo U("Pages/productInvestor?pid=".$pid);?>', function (data) {
            $("#investor_count").html(data.count);

            $(".supporter-box").html(data.html);
        }, 'json');

        $.get('<?php echo U("Pages/productComments?id=".$pid);?>', function (data) {
            $("#comment-box").html(data.html);
            bindCommentBtnEvent();
            //$("#investor-count").html(data.count);
        }, 'json');

        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $(this).parent('li').addClass('active');
        })

        // 分页按钮处理
        function pageChange() {
            $('#pagectrl .first,#pagectrl .num,#pagectrl .next,#pagectrl .end,#pagectrl .prev').click(function () {
                $.get($(this).attr('href'), function (data) {
                    $("#investlist").html(data.html);
                    $("#investor-count").html(data.count);
                }, 'json');
                return false;
            });
        }

        function pageChangeComment() {
            $('#pagectrl-comment .first,#pagectrl-comment .num,#pagectrl-comment .next,#pagectrl-comment .end,#pagectrl-comment .prev').click(function () {
                $.get($(this).attr('href'), function (data) {
                    $("#comment-box").html(data.html);
                    //$("#investor-count").html(data.count);
                    location.hash = '';
                    location.hash = '#comments';
                    bindCommentBtnEvent();
                }, 'json');
                return false;
            });
        }


        // 回复(显示恢复输入框)
        var bindCommentBtnEvent = function () {
            $(".btn-slide").unbind().click(function () {
                $(this).parent().parent().find('.panel').slideToggle();
                return false;
            });
            $('.btn-comment-comment').unbind().click(function () {
                var $detail = $(this).parents('.detail'),
                        $textarea = $detail.find('textarea'),
                        commentId = $detail.find('.comment_id').val(),
                        user = $detail.find('.from').children('b').text(),
                        content = $detail.find('.d').text();

                var data = {
                    project_id: projectId,
                    content: $textarea.val(),
                    reply_id: commentId
                };
                if ($textarea.val() == '') {
                    layer.alert('评论内容不能为空');
                    return false;
                }
                $.post(config.projectCommentAPI, data, function (data) {
                    if (data.status == 1) {
                        showCommentComment(data, user, content);
                        $textarea.val('');
                    } else {
                        layer.alert(data.info, 8);
                    }
                });
                return false;
            });
        };


        $('.buy_price').click(function () {
            var infoUrl = $(this).attr('href');
            $.get($(this).attr('href'), null, function (data) {
                if (data.status == '0') {
                    $('#messagebody').html(data.info);
                    $('#messageBox').modal('show');
                } else {
                    $('.control-group').removeClass('error');
                    window.location.href = infoUrl;
                    // $('#inputfund').html('');
                    // $('#followModal').modal('show');
                }
            });
            return false;
        });

        //关注
        $("#a_focus").click(function () {

            $.post($(this).data('url'), {focus: true}, function (data) {
            }, 'json')
                    .success(function (data) {
                        if (data.status) {
                            //alert('关注成功');
                            window.location.reload();
                        } else {
                            alert(data.info);
                        }
                        ;
                    })
                    .error(function (data) {
                        alert("网络连接出错");
                    });
        });

        // 剩余字数
        !function () {
            var txtElm = document.querySelector('#project-comment'),
                    countElm = document.querySelector('#content-count');
            var func = function () {
                var len = 140;
                countElm.innerHTML = len - this.value.length;
            };

            txtElm.onkeyup = func;
            txtElm.onblur = func;
        }();
        //项目评论 - 戴
        $('#btn-project-comment').click(function () {
            var $textarea = $('#project-comment');
            var data = {
                type: 1,
                project_id: projectId,
                content: $textarea.val(),
                reply_id: 0
            };

            if ($textarea.val() == '') {
                layer.alert('评论内容不能为空');
                return false;
            }
            $.post(config.projectCommentAPI, data, function (data) {
                if (data.status == 1) {
                    showTheComment(data);
                    $textarea.val('');
                } else {
                    layer.alert(data.info, 8);
                }
            });
            return false;
        });

        //呈现刚发表的评论 - 戴
        function showTheComment(data) {
            var html = '<li class="fresh-comment"><dl><dd class="img"><img src="' + (data.user_face || '') + '" alt="' + (data.user_name || '') + '"></dd><dd class="detail"><div class="from"><b>' + (data.user_name || '') + '</b>' + data.date + '</div><div class="d">' + (data.content || '') + '</div><div class="panel" class="reply" style="display:none;"><input type="hidden" class="comment_id" value="' + (data.id || 0) + '"><textarea name="" cols="" rows="" class="border1" style="width:100%;"></textarea><a href="#" class="btn-comment-comment">评论</a></div></dd><dd class="cz"><a href="#" class="btn-slide">回复</a></dd><dd></dd></dl></li>';
            $('#comments').prepend(html);
            $('.fresh-comment').css('backgroundColor', '#FFFFCC').animate({
                backgroundColor: '#FFFFFF'
            }, 2000, function () {
                $(this).css('backgroundColor', '#FFFFFF').removeClass('fresh-comment')
            });
            bindCommentBtnEvent();
        }

        function showCommentComment(data, user, content) {
            var html = '<li class="fresh-comment" id="fresh-comment"><dl><dd class="img"><img src="' + data.user_face + '" alt="众筹用户"></dd>' +
                    '<dd class="detail"><div class="from"><b>' + data.user_name + '</b>' + data.date + '</div>' +
                    '<div class="d">' + data.content + '</div><div class="pllist clearfix"><ul>' +
                    '<li>' + user + '说：' + content + '</li></ul></div>' +
                    '<div class="panel" style="display:none;"><input type="hidden" class="comment_id" value="' + data.id + '">' +
                    '<textarea name="" cols="" rows="" class="border1" style="width:100%;"></textarea>' +
                    '<a href="#" class="btn-comment-comment">评论</a></div></dd><dd class="cz"><a href="#" class="btn-slide">回复</a></dd><dd></dd></dl>\n</li>';

            $('#comments').prepend(html);
            $freshComment = $('.fresh-comment');
            $freshComment.css('backgroundColor', '#FFFFCC').animate({
                backgroundColor: '#FFFFFF'
            }, 2000, function () {
                $(this).removeClass('fresh-comment')
            });
            var freshCommentTop = $freshComment.offset().top,
                    $body = $('body');
            $body.animate({scrollTop: freshCommentTop}, 500);
            bindCommentBtnEvent();
            $('.panel').slideUp();
        }

        // 回复评论

        // 添加新的内容
        function addNew(data) {
            var cell = $(".templete .msg-cell").clone(true);
            $(cell).find('#comment_id').val(data.id);
            $(cell).find('#face').attr('src', data.user_face);
            $(cell).find('#user_name').html(data.user_name);
            $(cell).find('#date').html(data.date);
            var floot = Number($("#com_count").html()) + 1;
            $(cell).find('#floot').html(floot + 'F');
            $("#com_count").html(floot);
            $(cell).find('#content').html(data.content);
            if (data.old_user) {
                $(cell).find('#old_user').html(data.old_user);
                $(cell).find('#old_content').html(data.old_content);
            } else {
                $(cell).find('.msg-base').remove();
            }
            $(".msg-list").prepend(cell);
        }
        // 回复信息
        $("#btn_reply").click(function () {
            var cell = $(this).parents(".msg-cell");
            if ($(cell).find("#user_comment").val() == '') {
                alert('请填写回复内容。');
                return false;
            }
            var data = {
                project_id: projectId,
                content: $(cell).find("#user_comment").val(),
                reply_id: $(cell).find('#comment_id').val(),
                old_user: $(cell).find('header span:first').html(),
                old_content: $(cell).find('#cont').html()
            };

            $.post("<?php echo U('project/comment');?>", data, function (data) {
                var reply = $('.com-reply');
                $(reply).parents('.msg-cell').find('.msg-action').show();
                $(reply).hide(400);
                addNew(data);
            });
            return false;
        });

        // 回复(显示恢复输入框)
        var bindCommentBtnEvent = function () {
            $(".btn-slide").unbind().click(function () {
                $(this).parent().parent().find('.panel').slideToggle();
                return false;
            });
            $('.btn-comment-comment').unbind().click(function () {
                var $detail = $(this).parents('.detail'),
                        $textarea = $detail.find('textarea'),
                        commentId = $detail.find('.comment_id').val(),
                        user = $detail.find('.from').children('b').text(),
                        content = $detail.find('.d').text();

                var data = {
                    project_id: projectId,
                    content: $textarea.val(),
                    reply_id: commentId
                };
                if ($textarea.val() == '') {
                    layer.alert('评论内容不能为空');
                    return false;
                }
                $.post(config.projectCommentAPI, data, function (data) {
                    if (data.status == 1) {
                        showCommentComment(data, user, content);
                        $textarea.val('');
                    } else {
                        layer.alert(data.info, 8);
                    }
                });
                return false;
            });
        };

    </script>
    <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
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