<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:85:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/carousel/index.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/layout.html";i:1532285447;s:98:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/base_pjax.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/header.html";i:1532285447;s:101:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/sidebar_left.html";i:1532286250;s:99:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/navigation.html";i:1532285447;s:95:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/../../common/view/footer.html";i:1532285447;}*/ ?>
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
        
<title>轮播组件</title>

<link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/basics/carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/basics/carousel/slick.css">
<link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/basics/carousel/carousel.css">

<div class="page animation-fade">
    <div class="page-header">
        <h1 class="page-title">轮播组件</h1>
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
            <div class="panel-heading">
                <h3 class="panel-title">轮播组件</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap margin-lg-0">
                            <h4 class="example-title">默认</h4>
                            <p>下面是一个简单的幻灯片，使用 Bootstrap 轮播（Carousel）插件显示了一个循环播放元素的通用组件。</p>
                            <div class="example">
                                <div class="carousel slide" id="exampleCarouselDefault" data-ride="carousel">
                                    <ol class="carousel-indicators carousel-indicators-fall">
                                        <li class="active" data-slide-to="0" data-target="#exampleCarouselDefault"></li>
                                        <li class="" data-slide-to="1" data-target="#exampleCarouselDefault"></li>
                                        <li class="" data-slide-to="2" data-target="#exampleCarouselDefault"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg"
                                                 alt="...">
                                        </div>
                                        <div class="item">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg"
                                                 alt="...">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#exampleCarouselDefault" role="button"
                                       data-slide="prev">
                                        <span class="icon wb-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">上一个</span></a>
                                    <a class="right carousel-control" href="#exampleCarouselDefault" role="button"
                                       data-slide="next">
                                        <span class="icon wb-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">下一个</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">可选标题</h4>
                            <p>您可以通过 .item 内的 <code>.carousel-caption</code> 元素向幻灯片添加标题。可以在该处放置任何 HTML 代码，它会自动对齐并格式化。
                            </p>
                            <div class="example">
                                <div class="carousel slide" id="exampleCarouselCaptions" data-ride="carousel">
                                    <ol class="carousel-indicators carousel-indicators-fillin">
                                        <li class="active" data-slide-to="0"
                                            data-target="#exampleCarouselCaptions"></li>
                                        <li class="" data-slide-to="1" data-target="#exampleCarouselCaptions"></li>
                                        <li class="" data-slide-to="2" data-target="#exampleCarouselCaptions"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                <h3>第1张幻灯片</h3>
                                                <p>第1张幻灯片的描述内容</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                <h3>第2张幻灯片</h3>
                                                <p>第2张幻灯片的描述内容</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img class="width-full"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg"
                                                 alt="...">
                                            <div class="carousel-caption">
                                                <h3>第3张幻灯片</h3>
                                                <p>第3张幻灯片的描述内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#exampleCarouselCaptions" role="button"
                                       data-slide="prev">
                                        <span class="icon wb-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">上一个</span></a>
                                    <a class="right carousel-control" href="#exampleCarouselCaptions" role="button"
                                       data-slide="next">
                                        <span class="icon wb-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">下一个</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Slick
                    <small>
                        <a class="example-plugin-link" href="https://kenwheeler.github.io/slick/" target="_blank">官网</a>
                    </small>
                </h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">显示单个</h4>
                            <div class="example">
                                <div class="slider" id="exampleSingleItem">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">显示多个</h4>
                            <div class="example">
                                <div class="slider" id="exampleMultipleItems">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                    <div>
                                        <h3>7</h3>
                                    </div>
                                    <div>
                                        <h3>8</h3>
                                    </div>
                                    <div>
                                        <h3>9</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">响应式</h4>
                            <div class="example">
                                <div class="slider" id="exampleResponsive">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                    <div>
                                        <h3>7</h3>
                                    </div>
                                    <div>
                                        <h3>8</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">可变宽度</h4>
                            <div class="example">
                                <div class="slider" id="exampleVariableWidth">
                                    <div class="width-200">
                                        <h3>200</h3>
                                    </div>
                                    <div class="width-150">
                                        <h3>150</h3>
                                    </div>
                                    <div class="width-250">
                                        <h3>250</h3>
                                    </div>
                                    <div class="width-300">
                                        <h3>300</h3>
                                    </div>
                                    <div class="width-100">
                                        <h3>100</h3>
                                    </div>
                                    <div class="width-350">
                                        <h3>350</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">可变高度</h4>
                            <div class="example">
                                <div class="slider" id="exampleAdaptiveHeight">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                        <p>橘子</p>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                        <p>橘子 <br>苹果</p>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                        <p>哇，这么多！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">通过 Data 属性设置</h4>
                            <div class="example">
                                <div class="slider" id="exampleData"
                                     data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">居中模式</h4>
                            <div class="example">
                                <div class="slider" id="exampleCenter">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">懒加载</h4>
                            <div class="example">
                                <div class="slider" id="exampleLazy">
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-4.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">自动播放</h4>
                            <div class="example">
                                <div class="slider" id="exampleAutoplay">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">渐变</h4>
                            <div class="example">
                                <div class="slider" id="exampleFade">
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg">
                                    </div>
                                    <div>
                                        <img class="img-responsive" alt="..."
                                             data-lazy="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-4.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                    <div class="col-md-6">

                        <div class="example-wrap margin-md-0">
                            <h4 class="example-title">添加 & 删除</h4>
                            <div class="example example-buttons">
                                <div class="slider" id="exampleAddRemove">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-outline" id="exampleAddSlide">添加
                                    </button>
                                    <button type="button" class="btn btn-primary btn-outline" id="exampleRemoveSlide">
                                        删除
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="example-wrap">
                            <h4 class="example-title">过滤</h4>
                            <div class="example">
                                <div class="slider" id="exampleFiltering">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                    <div>
                                        <h3>6</h3>
                                    </div>
                                    <div>
                                        <h3>7</h3>
                                    </div>
                                    <div>
                                        <h3>8</h3>
                                    </div>
                                    <div>
                                        <h3>9</h3>
                                    </div>
                                    <div>
                                        <h3>10</h3>
                                    </div>
                                    <div>
                                        <h3>11</h3>
                                    </div>
                                    <div>
                                        <h3>12</h3>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-outline" id="exampleFilter">过滤
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Owlcarousel
                    <small>
                        <a class="example-plugin-link" href="https://github.com/smashingboxes/OwlCarousel2"
                           target="_blank">
                            官网
                        </a>
                    </small>
                </h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">没有边距</h4>
                            <div class="example">
                                <div class="owl-carousel" data-plugin="owlCarousel" data-center="false"
                                     data-dots="false" data-nav="true">
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-4.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-5.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-6.jpg"
                                             alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">居中</h4>
                            <div class="example">
                                <div class="owl-carousel-centered" data-plugin="owlCarousel" data-center="true"
                                     data-dots="false" data-nav="true">
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-4.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-5.jpg"
                                             alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-6.jpg"
                                             alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap margin-lg-0">
                            <h4 class="example-title">Logos</h4>
                            <div class="example">
                                <div class="owl-carousel-shortcode" data-plugin="owlCarousel" data-center="true"
                                     data-dots="true" data-nav="false">
                                    <div class="item">
                                        <i class="icon font-size-40 margin-right-15 fa-wechat" aria-hidden="true"></i>
                                        微信
                                    </div>
                                    <div class="item">
                                        <i class="icon font-size-40 margin-right-15 fa-qq" aria-hidden="true"></i> QQ
                                    </div>
                                    <div class="item">
                                        <i class="icon font-size-40 margin-right-15 fa-weibo" aria-hidden="true"></i> 微博
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">简单组合</h4>
                            <div class="example margin-bottom-0">
                                <div class="owl-carousel-portfolio owl-carousel-navOut" data-plugin="owlCarousel"
                                     data-margin="30">
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-1.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
                                    </div>
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-2.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
                                    </div>
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-3.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
                                    </div>
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-4.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
                                    </div>
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-5.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
                                    </div>
                                    <div class="item">
                                        <div class="cover">
                                            <img class="cover-image"
                                                 src="http://cdn.admui.com/demo/pjax/1.3.0/images/photos/city-6.jpg"
                                                 alt="...">
                                        </div>
                                        <h4>标题</h4>
                                        <p>内容描述</p>
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
<script src="<?php echo $domain['static']; ?>/js/basics/carousel/owl.carousel.min.js"></script>
<script src="<?php echo $domain['static']; ?>/js/basics/carousel/slick.min.js" data-name="slick"></script>
<script src="<?php echo $domain['static']; ?>/js/basics/carousel/carousel.js" data-deps="slick"></script>



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
