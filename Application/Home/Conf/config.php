<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.thinkphp.cn>
// +----------------------------------------------------------------------

/**
 * 前台配置文件
 * 所有除开系统级别的前台配置
 */
return array(

    // 预先加载的标签库
    'TAGLIB_PRE_LOAD'     =>    'OT\\TagLib\\Article,OT\\TagLib\\Think',
    'URL_MODEL' => 2,
    /* 主题设置 */
    'DEFAULT_THEME' =>  'default',  // 默认模板主题名称
    'HTML_CACHE_ON' => true,
    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => 'onethink_', // 缓存前缀
    'DATA_CACHE_TYPE'   => 'File', // 数据缓存类型
    'TMPL_ACTION_ERROR'     =>  'Public/error', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  'Public/success', // 默认成功跳转对应的模板文件
    'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志

    /* 文件上传相关配置 */
    'DOWNLOAD_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 5*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg,zip,rar,tar,gz,7z,doc,docx,txt,xml', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Download/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //下载模型上传配置（文件上传类配置）

    /* 编辑器图片上传相关配置 */
    'EDITOR_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Editor/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ),

    /* 图片上传相关配置 */
    'CARD_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => false, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Card/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //图片上传相关配置（文件上传类配置）

    'CARD_UPLOAD_DRIVER'=>'local',
    
    /* 图片上传相关配置 股权众筹*/
    'PROJ_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => false, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Project/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //图片上传相关配置（文件上传类配置）

    /* 图片上传相关配置 实物众筹*/
    'PRODUCT_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => false, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Product/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //图片上传相关配置（文件上传类配置）

    'PROJ_UPLOAD_DRIVER'=>'local',
    'PRODUCT_UPLOAD_DRIVER'=>'local',

    /* 图片上传相关配置 */
    'PHOTO_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => false, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Picture/Photo/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //图片上传相关配置（文件上传类配置）

    'PHOTO_UPLOAD_DRIVER'=>'local',
    //本地上传文件驱动配置
    'UPLOAD_LOCAL_CONFIG'=>array(),

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        '__M_IMG__'    => __ROOT__ . '/Public/Mobile/images',
        '__M_CSS__'    => __ROOT__ . '/Public/Mobile/css',
        '__M_JS__'     => __ROOT__ . '/Public/Mobile/js',
    ),

    /* SESSION 和 COOKIE 配置 */
    'SESSION_PREFIX' => 'onethink_home', //session前缀
    'COOKIE_PREFIX'  => 'onethink_home_', // Cookie前缀 避免冲突

    /**
     * 附件相关配置
     * 附件是规划在插件中的，所以附件的配置暂时写到这里
     * 后期会移动到数据库进行管理
     */
    'ATTACHMENT_DEFAULT' => array(
        'is_upload'     => true,
        'allow_type'    => '0,1,2', //允许的附件类型 (0-目录，1-外链，2-文件)
        'driver'        => 'Local', //上传驱动
        'driver_config' => null, //驱动配置
    ), //附件默认配置

    'ATTACHMENT_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 5*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg,zip,rar,tar,gz,7z,doc,docx,txt,xml', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Attachment/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //附件上传配置（文件上传类配置）

    'THINK_EMAIL' => array(
        'SMTP_HOST'   => 'smtp.exmail.qq.com', //SMTP服务器
        'SMTP_PORT'   => '465', //SMTP服务器端口
        'SMTP_USER'   => 'bp@1tht.cn', //SMTP服务器用户名
        'SMTP_PASS'   => 'jumu2014', //SMTP服务器密码
        'FROM_EMAIL'  => 'bp@1tht.cn', //发件人EMAIL
        'FROM_NAME'   => '一塔湖图众筹', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
    ), //邮件配置

/*    'NORMAL_PAY' =>array(
        'MERKEY' => '111111', 
        'MERCHANTID'=>'1001', 
        'SUBJECT'=>'1001001',
        'PAY_URL' => 'http://netpay.umbpay.com.cn:8086/pay2_1_/paymentImplAction.do',
    ),
    'QUICK_PAY' =>array(
        'KEY' => '111111', 
        'MERCHANTNO'=>'1058', 
        'SECRETKEY'=>'abcdefgh',
        'USER_PREFIX' => 'WH2',
        'SUBJECT'=>'',
        'PAY_URL' => 'http://111.202.180.133:8086/QuickPay/msgProcess/acceptReq.do',
    ),
     'DRAW_CASH' =>array(
    		'MERKEY' => '7Py53cr76Z8f',
    		'MERCHANTID'=>'1110',
    		'ALIAS'=>'ES1110001',
    		'DRAW_URL' =>'http://120.52.71.4:10086/umbpayES/recvMsg/doRcvMsg.do',
    ),
    'SAVE_CHECK' =>array(
            'MERKEY' => '111111',
            'MERCHANTID'=>'1058',
            'ALIAS'=>'ES1110001',
            'URL' =>'http://111.202.180.130:8086/secCenter/msgProcess/acceptReq.do',
    ),
 *  /* 第三方接口配置 
    'MERCHANT' => array(
        'MERCHANT_NO' => 'CF2000000260',
        'MERCHANT_KEY' => '59ada5cc676648642822e8e5c994ed8f',
        'MERCHANT_URL1' => 'http://120.52.71.6:20080/acctEscrow/msgProcess/acceptPageReq.do',
        'MERCHANT_URL2' => 'http://120.52.71.6:20080/acctEscrow/msgProcess/acceptXmlReq.do',
        'HOST_NAME' => 'http://www.dreammove.cn',
        'FUND_PREFIX' => 'FU2',
        'PROJECT_PREFIX' => 'PR2',
    ),
    
    'SMSKEY'=>'daNjvDHjd48',
    
 */
    /*
     *  商品种类（subject）：1177001 
        商户号：1177 
        商户秘钥：4Yk06lqP8JrdL 
        数据秘钥：ytht_999
     */
    //现在的对接
    /*
     * 银行支付 
     * MERKEY      商户秘钥
     * MERCHANTID  商户号
     * SUBJECT     商品种类
     */
      'NORMAL_PAY' =>array(
        'MERKEY' => '64563kS9N1', 
        'MERCHANTID'=>'1228', 
        'SUBJECT'=>'1228000',
        'PAY_URL' => 'https://www.umbpay.com/pay2_1_/paymentImplAction.do',
    ),
    /*
     * 快速支付 
     * KEY         商户秘钥
     * MERCHANTNO  商户号
     * SECRETKEY   数据秘钥
     * USER_PREFIX 不知道干嘛的
     * SUBJECT     商品种类
     */
    'QUICK_PAY' =>array(
        'KEY' => '64563kS9N1', 
        'MERCHANTNO'=>'1228', 
        'SECRETKEY'=>'RHG5g0_2',
        'USER_PREFIX' => 'WH2',
        'SUBJECT'=>'1228000',
        'PAY_URL' => 'https://www.umbpay.com/QuickPay/msgProcess/acceptReq.do',
    ),
     /*
     * 银行支付 
     * MERKEY      商户秘钥
     * MERCHANTID  商户号
     * ALIAS       不知道干嘛的
     */
    'SAVE_CHECK' =>array(
            'MERKEY' => '64563kS9N1',
            'MERCHANTID'=>'1228',
            'ALIAS'=>'ES1110001',
            'URL' =>'https://www.umbpay.com/secCenter/msgProcess/acceptReq.do',
    ),
    
     'DRAW_CASH' =>array(
    		'MERKEY' => '7Py53cr76Z8f',
    		'MERCHANTID'=>'1177',
    		'ALIAS'=>'ES1110001',
    		'DRAW_URL' =>'http://120.52.71.4:10086/umbpayES/recvMsg/doRcvMsg.do',
    ),
    
    
    /* 第三方接口配置 */
    'MERCHANT' => array(
        'MERCHANT_NO' => 'CF2000000260',
        'MERCHANT_KEY' => '59ada5cc676648642822e8e5c994ed8f',
        'MERCHANT_URL1' => 'http://120.52.71.6:20080/acctEscrow/msgProcess/acceptPageReq.do',
        'MERCHANT_URL2' => 'http://120.52.71.6:20080/acctEscrow/msgProcess/acceptXmlReq.do',
        'HOST_NAME' => 'http://bp@1tht.cn',
        'FUND_PREFIX' => 'FU2',
        'PROJECT_PREFIX' => 'PR2',
    ),
    
    'SMSKEY'=>'daNjvDHjd48',
    
    /* 网站微信登录 */
    'WEIXIN' => array(
 		'APPID' => 'wxb3ed0b08442948d1',
    	'SECRET' => '022ab4d0f7c00b0faa8971f11dcd29b2',
    	'STATE' => 'dreammove2015',
    	'URL1' => 'https://api.weixin.qq.com/sns/oauth2/access_token',//获取凭证（access_token）
    	'URL2' => 'https://api.weixin.qq.com/sns/auth',//检验授权凭证（access_token）是否有效
    	'URL3' => 'https://api.weixin.qq.com/sns/userinfo',//获取用户信息
    ),
    
);
