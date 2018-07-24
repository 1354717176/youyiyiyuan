<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:90:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/progress_bars/index.html";i:1532286413;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/layout.html";i:1532285447;s:98:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/base_pjax.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/header.html";i:1532285447;s:101:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/sidebar_left.html";i:1532286545;s:99:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/navigation.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/footer.html";i:1532285447;}*/ ?>
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
                                    <li class="site-menu-item">
                                        <a data-pjax="" href="<?php echo Url('/basics/color',[],false,false); ?>" target="_blank">
                                            <span class="site-menu-title">配色方案</span>
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
        
<title>进度条</title>
<div class="page animation-fade">
    <div class="page-header">
        <h1 class="page-title">进度条</h1>
    </div>
    <div class="page-content">

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">进度条</h3>
            </div>
            <div class="panel-body container-fluid">

                <div class="example-wrap">
                    <h4 class="example-title">样式</h4>
                    <div class="row row-lg">
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>基本</h5>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" style="width: 80%;" role="progressbar">
                                            <span class="sr-only">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>文字</h5>
                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar">
                                            60%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>条纹</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar">
                                            <span class="sr-only">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-lg">
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>指示</h5>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning progress-bar-indicating active" style="width: 80%;" role="progressbar">
                                            <span class="sr-only">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>动画</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%" role="progressbar">
                                            <span class="sr-only">90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="example-wrap">
                                <div class="example">
                                    <h5>堆叠</h5>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" style="width: 35%" role="progressbar">
                                            <span class="sr-only">35%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%" role="progressbar">
                                            <span class="sr-only">20%</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" style="width: 10%" role="progressbar">
                                            <span class="sr-only">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-lg">
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">颜色</h4>
                            <div class="example">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-default" style="width: 15%;" role="progressbar">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" style="width: 30%;" role="progressbar">
                                        <span class="sr-only">30%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-info" style="width: 45%;" role="progressbar">
                                        <span class="sr-only">45%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">
                                        <span class="sr-only">75%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-dark" style="width: 90%;" role="progressbar">
                                        <span class="sr-only">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">大小</h4>
                            <div class="example">
                                <div class="progress progress-xs">
                                    <div class="progress-bar" style="width: 60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" style="width: 60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar" style="width: 60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">圆角</h4>
                            <div class="example">
                                <div class="progress progress-square">
                                    <div class="progress-bar progress-bar-primary" style="width: 50%;" role="progressbar">
                                        <span class="sr-only">50%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="width: 50%;" role="progressbar">
                                        <span class="sr-only">50%</span>
                                    </div>
                                </div>
                                <div class="progress progress-circle">
                                    <div class="progress-bar progress-bar-primary" style="width: 50%;" role="progressbar">
                                        <span class="sr-only">50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">竖向进度条颜色</h4>
                            <div class="example" style="max-height: 250px; overflow: hidden;">
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-default" style="height:15%;" role="progressbar">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-success" style="height:30%;" role="progressbar">
                                        <span class="sr-only">30%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-info" style="height:45%;" role="progressbar">
                                        <span class="sr-only">45%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-warning" style="height:60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-danger" style="height:75%;" role="progressbar">
                                        <span class="sr-only">75%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical margin-right-0">
                                    <div class="progress-bar progress-bar-dark" style="height:90%;" role="progressbar">
                                        <span class="sr-only">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">竖向进度条大小</h4>
                            <div class="example" style="max-height: 250px; overflow: hidden;">
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar" style="height:60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm progress-vertical">
                                    <div class="progress-bar" style="height:60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar" style="height:60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-lg progress-vertical margin-right-0">
                                    <div class="progress-bar" style="height:60%;" role="progressbar">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="example-wrap">
                            <h4 class="example-title">竖向进度条复杂应用</h4>
                            <div class="example" style="max-height: 250px; overflow: hidden;">
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-success" style="height:25%;" role="progressbar">
                                        <span class="sr-only">35%</span>
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" style="height:15%;" role="progressbar">
                                        <span class="sr-only">20%</span>
                                    </div>
                                    <div class="progress-bar progress-bar-danger" style="height:10%;" role="progressbar">
                                        <span class="sr-only">10%</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs progress-vertical">
                                    <div class="progress-bar progress-bar-warning progress-bar-indicating active" style="height:70%;" role="progressbar">
                                        <span class="sr-only">70%</span>
                                    </div>
                                </div>
                                <div class="progress progress-lg progress-vertical">
                                    <div class="progress-bar progress-bar-danger" style="height:80%;" role="progressbar">
                                        <span class="progress-label">80%</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height:90%;" role="progressbar">
                                        <span class="sr-only">90%</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical margin-right-0">
                                    <div class="progress-bar progress-bar-info progress-bar-striped" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height:95%;" role="progressbar">
                                        <span class="sr-only">95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-sm-12">

                        <div class="example-wrap">
                            <h4 class="example-title">技能展示</h4>
                            <div class="row row-lg">
                                <div class="col-sm-6">
                                    <div class="example-wrap">
                                        <h5>Photoshop <span class="pull-right">40%</span>
                                        </h5>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-indicating active" style="width: 40%;" role="progressbar"></div>
                                        </div>
                                        <h5>Html <span class="pull-right">80%</span>
                                        </h5>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-indicating active" style="width: 80%;" role="progressbar"></div>
                                        </div>
                                        <h5>Javascript <span class="pull-right">60%</span>
                                        </h5>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-indicating active" style="width: 60%;" role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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
