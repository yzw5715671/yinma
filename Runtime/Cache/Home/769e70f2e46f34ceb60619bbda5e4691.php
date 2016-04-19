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
	
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/home.css">
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" href="/Public/Home/css/nanoscroller.css">
    <link rel="stylesheet" href="/Public/static/slick/slick.css">



    <div id="server-data" style="display:none;">
        <input type="hidden" name="noticelist" value="<?php echo ($noticelist); ?>">
        <input type="hidden" name="newslist" value="<?php echo ($newslist); ?>">
        <input type="hidden" name="getinfo" value="<?php echo U('Index/getinfo');?>">
    </div>

    <div class="banner-section">
        <div class="banner-container">
            <?php if(is_array($bannerList)): foreach($bannerList as $key=>$vo): ?><div style="height: 490px; background: url('<?php echo (get_cover($vo["img_id"],'path')); ?>') no-repeat center;">
                    <a href="<?php echo ($vo["extra"]); ?>" style="display: block;width: 100%;height: 100%;" target="_blank" alt="众筹推荐">
                       <!--<img src="<?php echo (get_cover($vo["img_id"],'path')); ?>" alt="<?php echo ($vo["name"]); ?>-一塔湖图众筹 众筹 推荐"/>--></a>
                </div><?php endforeach; endif; ?>
        </div>
        <div class="prev"></div>
        <div class="next"></div>
    </div>

    <!-- 成就条 -->
    <div class="achievement-box">
        <div class="mid01 cl">
            <dl>
                <dd class="c1">
                    <em class="animate-num"><?php echo ($suminfo["sum_count"]); ?></em>项目
                </dd>
                <dd class="c2">
                    <em class="animate-num"><?php echo ($suminfo['sum_fund']); ?></em>融资额
                </dd>
                <dd class="c3">
                    <em class="animate-num"><?php echo ($suminfo["sum_member"]); ?></em>认证投资人
                </dd>
            </dl>
        </div>
    </div>

    <!-- 成就条位置 -->
    <script>
        !function () {
            var getW = function () {
                return document.documentElement.clientWidth || document.body.clientWidth;
            };
            var elm = document.querySelector('.achievement-box');
            var reCalc = function () {
                var w = getW();
                if (w < 1440) {
                    elm.style.left = '0';
                    elm.style.right = '0';
                } else {
                    elm.style.left = (w - 1440) * 0.5 + 'px';
                    elm.style.right = (w - 1440) * 0.5 + 'px';
                }
            };
            reCalc();
            $(window).resize(reCalc);
        }();
    </script>

    <!-- 网站公告 -->
    <div class="fl w100 mt20" style="margin-top: 0px">
        <div class="content">
            <div class="notice-box">
                <div class="header">
                    <div class="tab-title-list clearfix">
                        <a href="javascript:" id="tab-title-news" class="tab-title active"
                           data-panel="news-panel">创富干货</a>
                        <a href="javascript:" id="tab-title-notice" class="tab-title" data-panel="notice-panel">网站公告<i
                                class="hidden" id="new-notice-count"></i></a>
                    </div>
                </div>
                <div class="panel-win">
                    <div class="panel-list clearfix">
                        <div class="news-panel panel nano" data-type="1">
                            <div class="nano-content">
                                <?php if(is_array($news)): foreach($news as $a=>$v): ?><div class="notice-item clearfix" data-id="<?php echo ($v["id"]); ?>">
                                        <div class="date">
                                            <div class="day"><?php echo (time_format($v["create_time"],'d')); ?></div>
                                            <div class="ym"><?php echo (time_format($v["create_time"],'Y-m')); ?></div>
                                        </div>
                                        <div class="title-box">
                                            <a class="title-link"
                                               data-href="<?php echo U('Info/infomation?id='.$v['id']);?>"><span><?php echo ($v["title"]); ?></span></a>
                                        </div>
                                    </div><?php endforeach; endif; ?>
                                <div class="more"><a href="<?php echo U('Info/infomationlist');?>">查看更多</a></div>
                            </div>
                        </div>
                        <div class="notice-panel panel nano" data-type="0">
                            <div class="nano-content">
                                <?php if(is_array($notice)): foreach($notice as $a=>$v): ?><div class="notice-item clearfix" data-id="<?php echo ($v["id"]); ?>">
                                        <div class="date">
                                            <div class="day"><?php echo (time_format($v["create_time"],'d')); ?></div>
                                            <div class="ym"><?php echo (time_format($v["create_time"],'Y-m')); ?></div>
                                        </div>
                                        <div class="title-box">
                                            <a class="title-link" data-href="<?php echo U('Info/notice?id='.$v['id']);?>"><span><?php echo ($v["title"]); ?></span></a>
                                        </div>
                                    </div><?php endforeach; endif; ?>
                                <div class="more"><a href="<?php echo U('info/noticelist');?>">查看更多</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notice-content-box">
                    <a target="_blank" class="title"></a>
                    <div class="content loading"></div>
                    <a target="_blank" class="more">查看详细 ></a>
                </div>
            </div>
        </div>
    </div>

    <!-- 合投项目 -->
    <div class="proj-section now">
        <div class="header">
            <a class="more" href="<?php echo U('List/index',array('type'=>0,'status'=>1,'p'=>1));?>">MORE</a>
        </div>
    <!--    <div class="sub-header">嗯，开投了，没下架就能投投投！</div> -->
    <div class="sub-header">&nbsp;</div>
        <div class="proj-container">
            <?php if(is_array($project["rapid"])): $i = 0; $__LIST__ = $project["rapid"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="proj-box clearfix">
                    <div class="img-box"><a href="<?php echo U('project/detail?id='.$vo['id']);?>"><img class="img"
                                                                                             src="<?php echo (get_cover($vo["cover"],'path')); ?>"></a>
                    </div>
                    <div class="detail-box">
                        <div class="title"><a href="<?php echo U('project/detail?id='.$vo['id']);?>"><?php echo ($vo["project_name"]); ?></a></div>
                        <div class="intro"><?php echo ($vo["abstract"]); ?></div>
                        <div class="statistics-box clearfix">
                            <div class="box mbe">
                                <div> <span class="num animate-num"><?php echo round($vo['need_fund']/10000, 2);?></span><span class="new_houzui">万</span></div>
                                <div class="label">目标额</div>
                            </div>
                            <div class="box qte">
                                <div> <span class="num animate-num"><?php echo round($vo['follow_fund']);?></span><span class="new_houzui">元</span></div>
                                
                                <div class="label">起投额</div>
                            </div>
                            <div class="box yte">
                                <div><span class="num animate-num"><?php echo round($vo['has_fund']/10000, 2);?></span><span class="new_houzui">万</span></div>
                                <div class="label">已投额</div>
                            </div>
                            <div class="box ywc">
                                <div><span class="num animate-num"><?php echo round($vo['finish_rate'], 2);?></span><span class="new_houzui">%</span></div>
                                <div class="label">已完成</div>
                            </div>
                            <div class="box tzr last">
                                <div><span  class="num animate-num"><?php echo ($vo['investor_count']); ?></span><span class="new_houzui">人</span></div>
                                <div class="label">投资人</div>
                            </div>
                        </div>
                        <div class="progress-box animate-bar" data-target="<?php echo round($vo['finish_rate'], 2);?>">
                            <div class="rail"></div>
                            <div class="thumb"></div>
                        </div>
                        <div class="icon-box clearfix">
                            <div class="city"><?php echo (getdistrict($vo["city"])); ?></div>
                            <div class="comment"><?php echo ($vo['comment_count']); ?></div>
                            <div class="hit" title="浏览量"><?php echo ($vo['read_record']); ?></div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>  
            <!-- 这是实物众筹 合投开始-->
            <?php if(is_array($productList)): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="proj-box clearfix">
                    <div class="img-box"><a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>"><img class="img"
                                                                                             src="<?php echo (get_cover($v['home_img'],'path')); ?>"></a>
                    </div>
                    <div class="detail-box">
                        <div class="title"><a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>">实物：<?php echo ($v["name"]); ?></a></div>
                        <div class="intro"><?php echo ($v["abstract"]); ?></div>
                        <div class="statistics-box clearfix">
                            <div class="box mbe" style="width:170px">
                                <div> <span class="num animate-num"><?php echo (change_fund($v['amount'])); ?></span><span class="new_houzui">元</span></div>
                                <div class="label">目标额</div>
                            </div>
                            <div class="box yte" style="width:150px">
                                <div><span class="num animate-num"><?php echo round($v['finish_amount']/10000, 4);?></span><span class="new_houzui">万</span></div>
                                <div class="label">已投额</div>
                            </div>
                            <div class="box ywc" style="width:150px">
                                <div><span class="num animate-num"><?php echo round(($v['finish_amount']/$v['amount'])*100);?></span><span class="new_houzui">%</span></div>
                                <div class="label">已完成</div>
                            </div>
                    <!--        <div class="box tzr last" style="width:100px">
                                <div><span  class="num animate-num"><?php echo ($v['read_record']); ?></span><span class="new_houzui">人</span></div>
                                <div class="label">浏览量</div>
                            </div> -->
                        </div>
                        <div class="progress-box animate-bar" data-target="<?php echo round(($v['finish_amount']/$v['amount'])*100, 2);?>">
                            <div class="rail" ></div>
                            <div id="thumb_img" class="thumb"></div>
                        </div>
                        
                        <div class="icon-box clearfix" style='text-align: right'>
                <!--            <div class="city"><?php echo (getdistrict($v["city"])); ?></div> 
                            <div class="comment"><?php echo round($finish_amount);?></div>-->
                            <div class="hit" title="浏览量"><?php echo ($v['read_record']); ?></div> 
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--实物众筹 合投结束-->
        </div>
    </div>

    <!-- 预热项目 -->
    <div class="proj-section preheat">
        <div class="header">
            <a class="more" href="<?php echo U('List/index',array('type'=>0,'status'=>3,'p'=>1));?>">MORE</a>
        </div>
    <!--    <div class="sub-header">咦，要投了，我来晒意见秀态度~</div>  -->
    <div class="sub-header">&nbsp;</div>
        <div class="proj-container">
            <?php if(is_array($project["normal"])): $i = 0; $__LIST__ = $project["normal"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="proj-box clearfix">
                    <div class="img-box"><a href="<?php echo U('project/detail?id='.$vo['id']);?>">
                        <img class="img" src="<?php echo (get_cover($vo["cover"],'path')); ?>"></a>
                        <?php if($vo["leader_id"] == 0): ?><div class="leader"><a href="<?php echo U('project/leader_info?id='.$vo['id']);?>" style="font-size: 13px;font-weight: 600">寻找领投人</a></div><?php endif; ?>
                    </div>
                    <div class="detail-box">
                        <div class="title"><a href="<?php echo U('project/detail?id='.$vo['id']);?>"><?php echo ($vo["project_name"]); ?></a></div>
                        <div class="intro"><a href="<?php echo U('project/detail?id='.$vo['id']);?>"><?php echo ($vo["abstract"]); ?></a></div>
                        <div class="statistics-box clearfix">
                            <div class="box mbe">
                                <span class="num animate-num"><?php echo round($vo['need_fund']/10000, 2);?></span>
                                <span class="unit">万</span>
                                <div class="label">目标额</div>
                            </div>
                            <div class="box qte last">
                                <span class="num animate-num"><?php echo round($vo['follow_fund']);?></span>
                                <span class="unit">元</span>
                                <div class="label">起投额</div>
                            </div>
                        </div>
                        <div class="icon-box clearfix">
                            <div class="city"><?php echo (getdistrict($vo["city"])); ?></div>
                            <div class="comment"><?php echo ($vo['comment_count']); ?></div>
                            <div class="hit"><?php echo ($vo['read_record']); ?></div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>

    <?php if (false): ?>
    <!-- 实物众筹按钮, 股票基金按钮 -->
    <div class="link-section clearfix">
        <div class="link-box">
            <a href="<?php echo U('List/index',array('type'=>2,'status'=>0,'p'=>1));?>">
                <div class="link-btn">实物众筹</div>
                <br>

                <div class="link-label">用优惠的价格成为第一批“尝鲜者”！</div>
            </a>
        </div>
        <div class="link-box second">
            <a href="<?php echo U('List/index',array('type'=>3,'status'=>0,'p'=>1));?>">
                <div class="link-btn">股票基金</div>
                <div>赚钱也可以很好玩，散户也可以不落单！</div>
            </a>
        </div>
    </div>
    <?php endif ?>

    <!-- 成功项目 -->
    <div class="proj-section succeed clearfix">
        <div class="header">
            <a class="more" href="<?php echo U('List/index',array('type'=>0,'status'=>2,'p'=>1));?>">MORE</a>
        </div>
    <!--    <div class="sub-header">喔。投完了，关注最新发展动态。</div>  -->
    <div class="sub-header">&nbsp;</div>
        <div class="proj-container">
            <?php if(is_array($project["finish"])): $i = 0; $__LIST__ = $project["finish"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="proj-box clearfix">
                    <a href="<?php echo U('project/detail?id='.$vo['id']);?>">
                        <div class="img-box"><img class="img" src="<?php echo (get_cover($vo["cover"],'path')); ?>"></div>
                        <div class="detail-box">
                            <div class="title"><?php echo ($vo["project_name"]); ?></div>
                            <div class="intro"><?php echo ($vo["abstract"]); ?></div>
                            <div class="statistics-box clearfix">
                        <span class="box yte">
                            <span class="label">已投额</span>
                            <span class="num"><?php echo round($vo['has_fund']/10000, 2);?>万元</span>
                        </span>
                        <span class="box tzr last">
                            <span class="label">完成度</span>
                    <!--        <span class="num"><?php if(($vo["id"]) == "2"): ?>114 <?php else: ?> <?php echo ($vo['investor_count']); endif; ?></span> -->
                         <span class="num"><?php if(($vo["id"]) == "2"): ?>114 <?php else: ?>
                    <?php echo floor(($vo['has_fund']/$vo['need_fund'])*100)?>%<?php endif; ?></span>
                        </span>
                            </div>
                        </div>
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--实物众筹 成功项目 开始-->
            <?php if(is_array($productok)): $i = 0; $__LIST__ = $productok;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="proj-box clearfix">
                    <a href="<?php echo U('product/viewdetail?pid='.$v['id']);?>">
                        <div class="img-box"><img class="img" src="<?php echo (get_cover($v['home_img'],'path')); ?>"></div>
                        <div class="detail-box">
                            <div class="title"><?php echo ($v["name"]); ?></div>
                            <div class="intro"><?php echo ($v["abstract"]); ?></div>
                            <div class="statistics-box clearfix">
                        <span class="box yte">
                            <span class="label">已投额</span>
                            <span class="num"><?php echo round($v['finish_amount']/10000, 4);?>万元</span>
                        </span>
                        <span class="box tzr last">
                            <span class="label"></span>
                            <span class="num"></span>
                        </span>
                            </div>
                        </div>
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--实物众筹 成功项目 结束-->
        </div>
    
    </div>

    <!-- 友情链接 -->
    <div class="friendly-link-section">
        <div class="header" style="line-height: 35px">
            <div class="line"></div>
            <div class="title">友情链接</div>
        </div>
        <ul class="links-list">
            <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="link" style="background-image: url(<?php echo (get_cover($vo["logo"],'path')); ?>)">
                    <a href="<?php echo ($vo["url"]); ?>" target="_blank" title="<?php echo ($vo["name"]); ?>"></a>       
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <ul id="fixed-tools" class="hidden">



        <li class="contact">
            <a href="javascript:void(0)">
                <i></i>
                <span>咨询热线</span>
            </a>
            <div class="float-panel">
                <i></i>
                <div class="tri"></div>
                <p>咨询热线</p>
                <p>周一至周五 10:30 ~ 18:00</p>
                <p class="phone">400-806 8787</p>
            </div>
        </li>
        <!--<li class="qr" style="display: none;">-->
        <li class="qr">
            <a href="javascript:void(0)">
                <i></i>
                <span>官方微信</span>
            </a>
            <div class="float-panel">
                <img class="qr-img" alt="一塔湖图众筹微信号" width="148" height="157" src="/Public/Home/images/weixin.jpg">
                <div class="tri"></div>
                <p>微信关注<span style="color: #72C2E5;">【一塔湖图众筹】</span></p>
                <p style="margin-bottom: 10px;">了解最新股权众筹资讯</p>
            </div>
        </li>
        <li id="back-top" class="back-top hidden">
            <a class="back-top" href="#" title="回顶部">
                <i></i>
                <span>回到顶部</span>
            </a>
        </li>


    </ul>

    <?php if(false){?>
    <div class="fl w100">
        <div class="mid03 cl">
            <b>天使投资人喊你来创业</b>手里有闲钱不知道怎么花？支持这些有趣的项目，选择你所喜欢的回报
        </div>

        <div class="list3 content cl">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <dl>
                            <dt><a href="个人主页－投资项目.html"><img src="/Public/Home/images/111.jpg"></a><b>zjjsjcy</b></dt>
                            <dd>一个菜鸟投资人<br>关注行业：文娱,旅游,TMT<br>投资项目：4个</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#"><img src="/Public/Home/images/111.jpg"></a><b>zjjsjcy</b></dt>
                            <dd>一个菜鸟投资人<br>关注行业：文娱,旅游,TMT<br>投资项目：4个</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#"><img src="/Public/Home/images/111.jpg"></a><b>zjjsjcy</b></dt>
                            <dd>一个菜鸟投资人<br>关注行业：文娱,旅游,TMT<br>投资项目：4个</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#"><img src="/Public/Home/images/111.jpg"></a><b>zjjsjcy</b></dt>
                            <dd>一个菜鸟投资人<br>关注行业：文娱,旅游,TMT<br>投资项目：4个</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#"><img src="/Public/Home/images/111.jpg"></a><b>zjjsjcy</b></dt>
                            <dd>一个菜鸟投资人<br>关注行业：文娱,旅游,TMT<br>投资项目：4个</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <span id="responsiveFlag"></span></div>
    </div>
    <?php }?>

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

    <script src="/Public/static/slick/slick.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.nanoscroller.min.js"></script>
    <!--<script src="/Public/Home/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>-->
    <!--<script type="text/javascript" src="/Public/Home/js/kwiks.js"></script>-->
    <!--<script type="text/javascript" src="/Public/Home/js/addons.js"></script>-->
    <script src="/Public/Home/js/index.js"></script>
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