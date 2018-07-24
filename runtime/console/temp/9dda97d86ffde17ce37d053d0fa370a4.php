<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:87:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/typography/index.html";i:1532286242;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/layout.html";i:1532285447;s:98:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/base_pjax.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/header.html";i:1532285447;s:101:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/sidebar_left.html";i:1532286430;s:99:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/navigation.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/footer.html";i:1532285447;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <title>Admui 在线演示系统</title>
    <meta charset="utf-8">
    <meta name="keywords" content="admui,admui官网,admui下载,admui框架,通用后台管理系统,后台框架,ui框架"/>
    <meta name="description" content="Admui在线演示系统，Admui是一个基于最新Web技术的企业级通用管理系统快速开发框架，可以帮助企业极大的提高工作效率，节省开发成本，提升品牌形象。"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 移动设备 viewport -->
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
    <meta name="author" content="admui.com">
    <!-- 360浏览器默认使用Webkit内核 -->
    <meta name="renderer" content="webkit">
    <!-- 禁止百度SiteAPP转码 -->
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <!-- Chrome浏览器添加桌面快捷方式（安卓） -->
    <link rel="icon" type="image/png" href="<?php echo $domain['static']; ?>/img/favicon.png">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Safari浏览器添加到主屏幕（IOS） -->
    <link rel="icon" sizes="192x192" href="<?php echo $domain['static']; ?>/img/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Admui">
    <!-- Win8标题栏及ICON图标 -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $domain['static']; ?>/img/apple-touch-icon.png">
    <meta name="msapplication-TileImage" content="<?php echo $domain['static']; ?>/img/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#62a8ea">
    <!-- 样式 -->
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/plugin/layui/css/layui.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/site.css" id="siteStyle">
    <!--[if lte IE 9]>
    <meta http-equiv="refresh" content="0; url='http://www.admui.com/ie/'"/>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="<?php echo $domain['static']; ?>/js/media.match.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/respond.min.js"></script>
    <![endif]-->

    <!-- 图标 -->
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/web-icons.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/animsition.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/toastr.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/demo.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/themify.css">

    <!-- 插件 -->
    <script src="<?php echo $domain['static']; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/modernizr.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/breakpoints.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/template.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/toastr.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/bootbox.min.js"></script>

    <!-- 核心  -->
    <script src="<?php echo $domain['static']; ?>/js/core.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/site-configs.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/components.js"></script>
    <script src="<?php echo $domain['static']; ?>/plugin/layui/layui.js"></script>

    <script>Breakpoints();</script>
    
</head>
<body class="site-contabs-open">
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-inverse " role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">切换菜单</span> <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#admui-navbarCollapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo visible-lg visible-xs navbar-logo"
                 src="<?php echo $domain['static']; ?>/img/logo-white.svg" title="Admui">
            <img class="navbar-brand-logo hidden-xs hidden-lg navbar-logo-mini"
                 src="<?php echo $domain['static']; ?>/img/logo-white-min.svg" title="Admui">
        </div>
    </div>
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="admui-navbarCollapse">
            <ul class="nav navbar-toolbar navbar-left">
                <li class="hidden-float">
                    <a data-toggle="menubar" class="hidden-float" href="javascript:;" role="button"
                       id="admui-toggleMenubar">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">切换目录</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="navbar-menu nav-tabs-horizontal nav-tabs-animate is-load" id="admui-navMenu">
                    <ul class="nav navbar-toolbar nav-tabs" role="tablist">
                        <!-- 顶部菜单 -->
                        <?php if(is_array($topMenu['menu_show']) || $topMenu['menu_show'] instanceof \think\Collection || $topMenu['menu_show'] instanceof \think\Paginator): $i = 0; $__LIST__ = $topMenu['menu_show'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <li role="presentation">
                            <a data-toggle="tab" href="#admui-navTabsItem-<?php echo $v['id']; ?>" aria-controls="admui-navTabsItem-<?php echo $v['id']; ?>"
                               role="tab" aria-expanded="false">
                                <i class="<?php echo $v['icon']; ?>"></i> <span><?php echo $v['name']; ?></span>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li role="presentation">
                            <a data-toggle="tab" href="#admui-navTabsItem-1" aria-controls="admui-navTabsItem-1"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-user"></i> <span>管理员</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" href="#admui-navTabsItem-2" aria-controls="admui-navTabsItem-2"
                               role="tab" aria-expanded="false">
                                <i class="icon fa-female" style="font-size: 17px;"></i> <span>置业顾问</span>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-3" aria-controls="admui-navTabsItem-3"
                               role="tab" aria-expanded="false">
                                <i class="icon fa-cogs"></i> <span>系统管理</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" href="#admui-navTabsItem-1" aria-controls="admui-navTabsItem-1"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-library"></i> <span>文章</span>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-2" aria-controls="admui-navTabsItem-2"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-settings"></i> <span>系统设置</span>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-2" aria-controls="admui-navTabsItem-2"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-desktop"></i> <span>页面示例</span>
                            </a>
                        </li>

                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-3" aria-controls="admui-navTabsItem-3"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-table"></i> <span>表格示例</span>
                            </a>
                        </li>

                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-4" aria-controls="admui-navTabsItem-4"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-order"></i> <span>表单示例</span>
                            </a>
                        </li>

                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-5" aria-controls="admui-navTabsItem-5"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-pie-chart"></i> <span>统计图表</span>
                            </a>
                        </li>

                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-6" aria-controls="admui-navTabsItem-6"
                               role="tab" aria-expanded="false">
                                <i class="icon fa-bars"></i> <span>菜单示例</span>
                            </a>
                        </li>

                        <li role="presentation" class="">
                            <a data-toggle="tab" href="#admui-navTabsItem-7" aria-controls="admui-navTabsItem-7"
                               role="tab" aria-expanded="false">
                                <i class="icon wb-settings"></i> <span>系统管理</span>
                            </a>
                        </li>-->

                        <?php if(!(empty($topMenu['menu_hide']) || (($topMenu['menu_hide'] instanceof \think\Collection || $topMenu['menu_hide'] instanceof \think\Paginator ) && $topMenu['menu_hide']->isEmpty()))): ?>
                        <li class="dropdown" id="admui-navbarSubMenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-animation="slide-bottom"
                               aria-expanded="true" role="button">
                                <i class="icon wb-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php if(is_array($topMenu['menu_hide']) || $topMenu['menu_hide'] instanceof \think\Collection || $topMenu['menu_hide'] instanceof \think\Paginator): $i = 0; $__LIST__ = $topMenu['menu_hide'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <li class="no-menu" role="presentation">
                                        <a href="/sitemap" target="_blank" role="menuitem" data-pjax>
                                            <i class="<?php echo $v['icon']; ?>"></i><span><?php echo $v['name']; ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!--<li class="no-menu" role="presentation">
                                    <a href="/sitemap" target="_blank" role="menuitem" data-pjax>
                                        <i class="icon wb-list-numbered"></i><span>网站地图</span>
                                    </a>
                                </li>
                                <li class="no-menu" role="presentation">
                                    <a href="/system/menu" target="_blank" role="menuitem" data-pjax>
                                        <i class="icon wb-wrench"></i><span>菜单管理</span>
                                    </a>
                                </li>-->
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <!--<li class="dropdown" id="admui-navbarMessage">
                    <a data-toggle="dropdown" href="javascript:;" class="msg-btn" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger up msg-num"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>最新消息</h5>
                            <span class="label label-round label-danger"></span>
                        </li>
                        <li class="list-group" role="presentation">
                            <div class="navbar-message-content" id="admui-messageContent" data-height="220px"
                                 data-plugin="slimScroll"></div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a href="/system/account/message" target="_blank" data-pjax>
                                <i class="icon fa-navicon"></i> 所有消息
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs" id="admui-navbarDisplay" data-toggle="tooltip" data-placement="bottom"
                    title="设置主题与布局等">
                    <a class="icon wb-layout" href="/system/settings/display" target="_blank" data-pjax>
                        <span class="sr-only">主题与布局</span>
                    </a>
                </li>
                <li class="hidden-xs" id="admui-QRcode" data-toggle="tooltip" data-placement="bottom" title="在手机上预览本页">
                    <a class="icon wb-mobile" href="#" data-toggle="modal" data-target="#admui-mobileView">
                        <span class="sr-only">在手机上预览</span></a>
                </li>
                <li class="hidden-xs" id="admui-demo-app" data-toggle="tooltip" data-placement="bottom" title="下载桌面版">
                    <a class="icon wb-download dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"
                       role="button">
                        <span class="sr-only">下载桌面版</span></a>
                    <ul class="dropdown-menu dropdown-menu-success bullet dropdown-menu-right" aria-labelledby="demoApp"
                        role="menu">
                        <li role="presentation">
                            <a href="http://dl.admui.com/app/win/admui-demo.zip" role="menuitem"><i
                                    class="icon fa-windows"></i> Windows 版</a>
                        </li>
                        <li role="presentation">
                            <a href="http://dl.admui.com/app/mac/admui-demo.zip" role="menuitem"><i
                                    class="icon fa-apple"></i> MacOS 版</a>
                        </li>
                    </ul>
                </li>
                <li class="open-kf" id="admui-service" data-toggle="tooltip" data-placement="bottom" title=""
                    data-original-title="在线咨询">
                    <a class="icon wb-user" href="#" role="button">
                        <span class="sr-only">在线咨询</span></a>
                </li>
                <li class="hidden-xs" id="admui-navbarFullscreen" data-toggle="tooltip" data-placement="bottom"
                    title="全屏">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">全屏</span>
                    </a>
                </li>-->
                <li>
                    <a class="icon fa-sign-out" id="admui-signOut" data-ctx="" data-user="9" href='<?php echo url("/login/off",[],false,false); ?>'
                       role="button">
                        <span class="sr-only">退出</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<nav class="site-menubar site-menubar-dark">
    <div class="site-menubar-body">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            <div class="tab-content height-full" id="admui-navTabs">
                <div class="tab-pane animation-fade height-full active" id="admui-navTabsItem-1" role="tabpanel">
                    <div>
                        <!--<ul class="site-menu">
                            <li class="site-menu-category">文章菜单</li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon fa-laptop" aria-hidden="true"></i>
                                    <span class="site-menu-title">文章管理</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/cate/lists',[],false,false); ?>" target="_blank" class="cate-list">
                                            <span class="site-menu-title">文章分类</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/article/lists',[],false,false); ?>" target="_blank" class="article-list">
                                            <span class="site-menu-title">文章列表</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/article/detail',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">文章添加</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>-->
                        <ul class="site-menu">
                            <li class="site-menu-category">管理员菜单</li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon fa-users" aria-hidden="true"></i>
                                    <span class="site-menu-title">管理员管理</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/member/lists',[],false,false); ?>" target="_blank" class="member-list">
                                            <span class="site-menu-title">管理员列表</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon fa-cube" aria-hidden="true"></i>
                                    <span class="site-menu-title">基本</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/button',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">按钮</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub">
                                        <a href="javascript:;">
                                            <i class="site-menu-icon" aria-hidden="true"></i>
                                            <span class="site-menu-title">矢量图标</span>
                                            <span class="site-menu-arrow"></span>
                                        </a>
                                        <ul class="site-menu-sub">
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/webicon',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">web-icons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/fontawesome',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">font-awesome</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/stroke',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">stroke</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/glyphicons',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">glyphicons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/ionicons',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">ionicons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/material',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">material</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/mfglabs',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">mfglabs</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/openiconic',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">open-iconic</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/themify',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">themify</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/weather',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">weather</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/octicons',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">octicons</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a data-pjax="" href="<?php echo Url('/basics/icon/octicons',[],false,false); ?>" target="_blank">
                                                    <span class="site-menu-title">octicons</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/dropdowns',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">下拉菜单</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/lists',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">列表组</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/tooltip_popover',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">气泡提示 & 弹出框</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/modals',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">模态框</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/tabs_accordions',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">选项卡 & 折叠面板</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/images',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">图片</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/badges_labels',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">徽章 & 标签</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/carousel',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">轮播组件</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/typography',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">排版</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/progress_bars',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">进度条</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane animation-fade height-full" id="admui-navTabsItem-2" role="tabpane2">
                    <div>
                        <ul class="site-menu">
                            <li class="site-menu-category">顾问菜单</li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon icon fa-street-view" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="site-menu-title">管理组</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/member/lists',['group_id'=>1],false,false); ?>" target="_blank" class="member1-list">
                                            <span class="site-menu-title">顾问列表</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/member/detail',['group_id'=>1],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">添加顾问</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon icon wb-users" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="site-menu-title">客户管理</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/member/lists',['group_id'=>5],false,false); ?>" target="_blank" class="member5-list">
                                            <span class="site-menu-title">客户列表</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane animation-fade height-full" id="admui-navTabsItem-3" role="tabpane3">
                    <div>
                        <ul class="site-menu">
                            <li class="site-menu-category">系统菜单</li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon fa-file-text-o" aria-hidden="true"></i>
                                    <span class="site-menu-title">日志管理</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/log/lists',[],false,false); ?>" target="_blank" class="log-list">
                                            <span class="site-menu-title">日志列表</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item has-sub ">
                                <a href="javascript:;">
                                    <i class="site-menu-icon icon fa-cog" aria-hidden="true"></i>
                                    <span class="site-menu-title">系统设置</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/system/set',['type'=>1],false,false); ?>" target="_blank" class="system-set1-list">
                                            <span class="site-menu-title">预约登记电话</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item has-sub">
                                        <a data-pjax="" href="<?php echo Url('/system/set',['type'=>2],false,false); ?>" target="_blank" class="system-set2-list">
                                            <span class="site-menu-title">预约登记查看详情</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="site-contabs" id="admui-siteConTabs">
    <button type="button" class="btn btn-icon btn-default pull-left hide">
        <i class="icon fa-angle-double-left"></i>
    </button>
    <div class="contabs-scroll pull-left">
        <ul class="nav con-tabs">
            <li class="active">
                <a data-pjax="" href="/" rel="contents"><span>首页</span></a>
            </li>
        </ul>
    </div>
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-icon btn-default hide">
            <i class="icon fa-angle-double-right"></i>
        </button>
        <button type="button" class="btn btn-default dropdown-toggle btn-outline" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span> <span class="sr-only">切换菜单</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="conTabsDropdown" role="menu">
            <li class="reload-page" role="presentation">
                <a href="javascript:;" role="menuitem"><i class="icon wb-reload"></i> 刷新当前</a>
            </li>
            <li class="close-other" role="presentation">
                <a href="javascript:;" role="menuitem"><i class="icon wb-close"></i> 关闭其他</a>
            </li>
            <li class="close-all" role="presentation">
                <a href="javascript:;" role="menuitem"><i class="icon wb-power"></i> 关闭所有</a>
            </li>
        </ul>
    </div>
</nav>

<main class="site-page">
    <div class="page-container" id="admui-pageContent">
        
<title>排版</title>
<div class="page animation-fade">
    <div class="page-header">
        <h1 class="page-title">排版</h1>
        <div class="page-header-actions">
            <button type="button" class="btn btn-icon btn-inverse btn-round">
                <i class="icon wb-pencil" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-icon btn-inverse btn-round">
                <i class="icon wb-refresh" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-icon btn-inverse btn-round">
                <i class="icon wb-settings" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    <div class="page-content">

        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">标题</h4>
                            <p>可使用 <code>&lt;h1&gt;</code> 到 <code>&lt;h6&gt;</code> 作为标题，如果需要使用标题的样式，但又想使用内联文本，也可以为元素添加
                                <code>.h1</code> 到 <code>.h6</code> class类来实现。</p>
                            <div class="example">
                                <h1>h1. 一级标题</h1>
                                <h2>h2. 二级标题</h2>
                                <h3>h3. 三级标题</h3>
                                <h4>h4. 四级标题</h4>
                                <h5>h5. 五级标题</h5>
                                <h6>h6. 六级标题</h6>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">副标题</h4>
                            <p>可以通过 <code>&lt;small&gt;</code> 标签，或者通过为元素添加 <code>.small</code> 类来实现副标题的显示。</p>
                            <div class="example">
                                <h1>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h1>
                                <h2>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h2>
                                <h3>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h3>
                                <h4>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h4>
                                <h5>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h5>
                                <h6>
                                    <i class="icon wb-book" aria-hidden="true"></i> 这里是标题
                                    <small>这里是副标题</small>
                                </h6>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">页面主体</h4>
                            <p>Admui 默认的字体大小 <code>font-size</code> 是 <strong>14px</strong>，行高 <code>line-height</code>
                                为 <strong>1.6</strong>，这些样式会应用到 <code>&lt;body&gt;</code> 元素及所有的段落上。此外，段落 <code>&lt;p&gt;</code>
                                会取一半的行高做为段落后面的距离。</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">突出显示</h4>
                            <p>对于高亮显示的文本，因为它具有上下文的关联性，所以我们使用 <code>&lt;mark&gt;</code> 标签，如下所示：</p>
                            <p>您可以使用mark标签来显示需要
                                <mark>突出显示</mark>
                                的文本。
                            </p>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-sm-block"></div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">地址</h4>
                            <p>为了让联系信息以最接近日常使用的格式呈现。请在每行添加 <code>&lt;br&gt;</code> 标签以保留需要的样式。</p>
                            <address>
                                <strong>阿里巴巴（中国）有限公司</strong> <br> 中国杭州市余杭区 <br> 文一西路969号 (311121) <br>
                                <abbr title="Phone">电话:</abbr> (+86) 571-8502-2088
                            </address>
                            <address>
                                <strong>阿里巴巴（中国）有限公司</strong> <br>
                                <a href="mailto:first.last@example.com">first.last@example.com</a>
                            </address>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">无序列表</h4>
                            <ul>
                                <li>这是一个无序列表</li>
                                <li>包含了四个列表项</li>
                                <li>和一个子列表
                                    <ul>
                                        <li>这里是子列表</li>
                                        <li>包含两个列表项</li>
                                    </ul>
                                </li>
                                <li>作为示例</li>
                            </ul>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-sm-block"></div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">有序列表</h4>
                            <ol>
                                <li>这是一个有序列表</li>
                                <li>包含了四个列表项</li>
                                <li>和一个子列表
                                    <ol>
                                        <li>这里是子列表</li>
                                        <li>包含两个列表项</li>
                                    </ol>
                                </li>
                                <li>作为示例</li>
                            </ol>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">无样式列表</h4>
                            <p>移除了列表默认 <code>list-style</code> 样式，并添加了 margin-left，但不对嵌套的子列表生效。</p>
                            <ul class="list-unstyled">
                                <li>这是一个无序列表</li>
                                <li>包含了四个列表项</li>
                                <li>和一个子列表
                                    <ul>
                                        <li>这里是子列表</li>
                                        <li>包含两个列表项</li>
                                    </ul>
                                </li>
                                <li>作为示例</li>
                            </ul>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">图标列表</h4>
                            <p>使用图标来作为列表标记。</p>
                            <ul class="list-icons">
                                <li><i class="wb-check" aria-hidden="true"></i>这是一个无序列表</li>
                                <li><i class="wb-check" aria-hidden="true"></i>包含了四个列表项</li>
                                <li><i class="wb-check" aria-hidden="true"></i>和一个子列表
                                    <ul>
                                        <li>这里是子列表</li>
                                        <li>包含两个列表项</li>
                                    </ul>
                                </li>
                                <li><i class="wb-check" aria-hidden="true"></i>作为示例</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">可收缩列表</h4>
                            <p>可收起/展开的列表。</p>
                            <ul class="list-icons">
                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>这是一个无序列表</li>
                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>包含了四个列表项</li>
                                <li>
                                    <a data-toggle="collapse" href="#exampleSubmenu" aria-controls="exampleSubmenu" aria-expanded="true">
                                        <i class="wb-chevron-right-mini" aria-hidden="true"></i>和一个子列表
                                    </a>
                                    <ul class="collapse in" id="exampleSubmenu">
                                        <li>这里是子列表</li>
                                        <li>包含两个列表项</li>
                                    </ul>
                                </li>
                                <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>作为示例</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">行级列表</h4>
                            <p>默认样式使用 <code>display: inline-block;</code> 并留有一定的 padding。</p>
                            <ul class="list-inline">
                                <li>苹果</li>
                                <li>葡萄</li>
                                <li>梨</li>
                            </ul>
                        </div>

                    </div>
                    <div class="clearfix visible-lg-block"></div>
                    <div class="col-lg-4 col-sm-6">

                        <div class="example-wrap">
                            <h4 class="example-title">带描述的列表</h4>
                            <p>带标题和描述的列表。</p>
                            <dl>
                                <dt>计算机</dt>
                                <dd>用来计算的仪器</dd>
                                <dt>显示器</dt>
                                <dd>以视觉方式显示信息的装置</dd>
                            </dl>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-lg-8">

                        <div class="example-wrap">
                            <h4 class="example-title">水平排列的描述列表</h4>
                            <p><code>.dl-horizontal</code> 可以让 <code>&lt;dl&gt;</code> 内的标题及其描述排在一行。</p>
                            <dl class="dl-horizontal">
                                <dt>计算机</dt>
                                <dd>用来计算的仪器</dd>
                                <dt>显示器</dt>
                                <dd>以视觉方式显示信息的装置</dd>
                            </dl>
                        </div>

                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap margin-lg-0">
                            <h4 class="example-title">嵌入效果</h4>
                            <p>使用 <code>.well</code> 给元素添加一个简单的嵌入效果。</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="well well-sm">嵌入效果展示</div>
                                    <div class="well">嵌入效果展示</div>
                                    <div class="well well-lg">嵌入效果展示</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="well well-sm well-primary">默认</div>
                                    <div class="well well-sm well-success">成功</div>
                                    <div class="well well-sm well-info">信息</div>
                                    <div class="well well-sm well-warning">警告</div>
                                    <div class="well well-sm well-danger">危险</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">首字下沉</h4>
                            <p>使用 <code>.drop-cap</code> 类，可为段落文字添加首字下沉效果。</p>
                            <p>
                                <span class="drop-cap">宋</span>代著名学者朱熹对此章评价极高，说它是「入道之门，积德之基」。本章这三句话是人们非常熟悉的。历来的解释都是：学了以后，又时常温习和练习，不也高兴吗等等。三句话，一句一个意思，前后句子也没有什么连贯性。但也有人认为这样解释不符合原义，指出这里的「学」不是指学习，而是指学说或主张；「时」不能解为时常，而是时代或社会的意思，「习」不是温习，而是使用，引申为采用。而且，这三句话不是孤立的，而是前后相互连贯的。这三句的意思是：自己的学说，要是被社会采用了，那就太高兴了；退一步说，要是没有被社会所采用，可是很多朋友赞同我的学说，纷纷到我这里来讨论问题，我也感到快乐；再退一步说，即使社会不采用，人们也不理解我，我也不怨恨，这样做，不也就是君子吗？（见《齐鲁学刊》1986年第6期文）这种解释可以自圆其说，而且也有一定的道理，供读者在理解本章内容时参考。
                            </p>
                            <p>
                                <span class="drop-cap drop-cap-reversed">此</span>外，在对「人不知，而不愠」一句的解释中，也有人认为，「人不知」的后面没有宾语，人家不知道什么呢？当时因为孔子有说话的特定环境，他不需要说出知道什么，别人就可以理解了，却给后人留下一个谜。有人说，这一句是接上一句说的，从远方来的朋友向我求教，我告诉他，他还不懂，我却不怨恨。这样，「人不知」就是「人家不知道我所讲述的」了。这样的解释似乎有些牵强。
                            </p>
                        </div>

                    </div>
                </div>
                <blockquote>
                    <small>事实上，我们提供的排版样式远远超过了以上列举的内容，以上列举的只是我们在 Bootstrap 基础上做了扩展的部分内容，如果您想了解更多 Bootstrap 的排版内容，请参考
                        <a href="http://v3.bootcss.com/css/#type" target="_blank">Bootstrap 布局</a>
                        。
                    </small>
                </blockquote>
            </div>
        </div>
    </div>
</div>




    </div>
    <div class="page-loading vertical-align text-center">
        <div class="page-loader loader-default loader vertical-align-middle" data-type="default"></div>
    </div>
</main>
<footer class="site-footer">
    <div class="site-footer-legal">上海畅控 &copy;
        <a href="http://www.admui.com" target="_blank">admui.com</a>
    </div>
    <div class="site-footer-right">
        当前版本：v1.1.0
        <a class="margin-left-5" data-toggle="tooltip" title="升级" href="http://www.admui.com/buy" target="_blank">
            <i class="icon fa-cloud-upload"></i>
        </a>
    </div>
</footer>

<div class="modal fade" id="admui-mobileView" aria-hidden="true" aria-labelledby="admui-mobileView" role="dialog"
     tabindex="-1">
    <div class="modal-dialog modal-sidebar modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">在手机上预览本页</h4>
            </div>
            <div class="modal-body">
                <p class="thumbnail">
                    <img class="img-responsive img-bordered" id="admui-mobileViewQRcode" src="<?php echo $domain['static']; ?>/img/api.png">
                </p>
                <p class="margin-top-20 font-size-12">
                    <i class="icon wb-bell" aria-hidden="true"></i> 您可以用手机APP(如微信、支付宝等)的扫码功能扫码下面的二维码，在手机上查看本页显示效果。</p>
            </div>
        </div>
    </div>
</div>

<!-- 插件 -->
<script src="<?php echo $domain['static']; ?>/js/jquery.pjax.min.js"></script>
<script src="<?php echo $domain['static']; ?>/js/responsive-tabs.js"></script>
<script src="<?php echo $domain['static']; ?>/js/jquery-asHoverScroll.min.js"></script>
<script src="<?php echo $domain['static']; ?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo $domain['static']; ?>/js/screenfull.min.js"></script>

<!-- 布局 -->
<script src="<?php echo $domain['static']; ?>/js/menu.js"></script>
<script src="<?php echo $domain['static']; ?>/js/media-menu.js"></script>
<script src="<?php echo $domain['static']; ?>/js/content-tabs.js"></script>
<script src="<?php echo $domain['static']; ?>/js/site.js"></script>

<script>
    /*console.log($.site);
    console.log(1111);
    $.site.contentTabs.buildTab({name:11,url:'baidu.com'});*/
</script>

</body>
</html>
