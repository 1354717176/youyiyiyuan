<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/login/view/index/index.html";i:1532285447;s:98:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/login/view/../../common/view/base_login.html";i:1532285447;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <title>Admui 在线演示系统</title>
    <meta charset="utf-8">
    <meta name="keywords" content="admui,admui官网,admui下载,admui框架,通用后台管理系统,后台框架,ui框架"/>
    <meta name="description" content="Admui在线演示系统，Admui是一个基于最新Web技术的企业级通用管理系统快速开发框架，可以帮助企业极大的提高工作效率，节省开发成本，提升品牌形象。"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 移动设备 viewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
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
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/site.css" id="siteStyle">
    <!--[if lte IE 9]>
    <meta http-equiv="refresh" content="0; url=/ie'"/>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="<?php echo $domain['static']; ?>/js/media.match.min.js"></script>
    <script src="<?php echo $domain['static']; ?>/js/respond.min.js"></script>
    <![endif]-->

    <!-- 图标 -->
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/web-icons.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/login.css">
    <link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/formValidation.css">
    
</head>

<body class="page-login layout-full page-dark">
<div class="page height-full">
    <div class="page-content height-full">
        <div class="page-brand-info vertical-align animation-slide-left hidden-xs">
            <div class="page-brand vertical-align-middle">
                <div class="brand">
                    <img class="brand-img" src="<?php echo $domain['static']; ?>/img/logo-white.svg" height="50" alt="Admui">
                </div>
                <h2 class="hidden-sm">Admui 通用管理系统快速开发框架</h2>
                <ul class="list-icons hidden-sm">
                    <li>
                        <i class="wb-check" aria-hidden="true"></i> Admui 是一个基于最新 Web
                        技术的企业级通用管理系统快速开发框架，可以帮助企业极大的提高工作效率，节省开发成本，提升品牌形象。
                    </li>
                    <li><i class="wb-check" aria-hidden="true"></i> 您可以 Admui 为基础，快速开发各种MIS系统，如CMS、OA、CRM、ERP、POS等。</li>
                    <li><i class="wb-check" aria-hidden="true"></i> Admui 紧贴业务特性，涵盖了大量的常用组件和基础功能，最大程度上帮助企业节省时间成本和费用开支。
                    </li>
                </ul>
                <div class="hidden-sm">
                    <a href="http://admui.com" class="btn btn-primary margin-right-5" target="_blank"><i class="icon wb-home"></i> 返回官网</a>
                    <div class="btn-group margin-right-5">
                        <button type="button" class="btn btn-success dropdown-toggle" id="demoApp" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon wb-download"></i> 下载桌面版 <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-success bullet" aria-labelledby="demoApp" role="menu">
                            <li role="presentation">
                                <a href="http://dl.admui.com/app/win/admui-demo.zip" role="menuitem"><i class="icon fa-windows"></i> Windows 版</a>
                            </li>
                            <li role="presentation">
                                <a href="http://dl.admui.com/app/mac/admui-demo.zip" role="menuitem"><i class="icon fa-apple"></i> MacOS 版</a>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="btn btn-info open-kf"><i class="icon wb-user"></i> 联系客服</a>
                </div>
            </div>
        </div>
        <div class="page-login-main animation-fade">

            <div class="vertical-align">
                <div class="vertical-align-middle">
                    <div class="brand visible-xs text-center">
                        <img class="brand-img" src="<?php echo $domain['static']; ?>/img/logo.svg" height="50" alt="Admui">
                    </div>
                    <h3 class="hidden-xs">登录 Admui</h3>
                    <p class="hidden-xs">Admui 在线演示系统</p>
                    <form class="login-form" method="post" id="loginForm" action='<?php echo Url("login",[],false,false); ?>'>
                        <div class="form-group">
                            <label class="sr-only" for="username">用户名</label>
                            <input type="text" class="form-control" id="username" name="loginName" placeholder="请输入用户名">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">密码</label>
                            <input type="password" autocomplete="off" class="form-control" id="password" name="password" placeholder="请输入密码">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">验证码</label>
                            <div class="input-group">
                                <input type="text" class="form-control code" name="validCode" placeholder="请输入验证码">
                                <a class="input-group-addon padding-0 reload-vify" href="javascript:;">
                                    <img src="<?php echo $captcha; ?>" height="40" alt="点击刷新验证码" data-id="1" class="captcha" data-url='<?php echo Url("/verifica/captcha","",false,false); ?>'>
                                </a>
                            </div>
                        </div>
                        <!--<div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">自动登录</label>
                            </div>
                            <div class="pull-right">
                                <a href="http://www.admui.com/?sendUrl=http%3A%2F%2Fdemo.admui.com%2Flogin#register" target="_blank">注册账号</a>
                                ·
                                <a class="collapsed" data-toggle="collapse" href="#forgetPassword" aria-expanded="false" aria-controls="forgetPassword">
                                    找回密码
                                </a>
                            </div>
                        </div>
                        <div class="collapse" id="forgetPassword" aria-expanded="true">
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                请返回官网点击登录按钮找回密码
                            </div>
                        </div>-->
                        <div class="form-group has-error has-feedback"></div>
                        <button type="submit" class="btn btn-primary btn-block">立即登录</button>
                    </form>
                </div>
            </div>
            <footer class="page-copyright">
                <p>上海畅控 &copy;<a href="http://www.admui.com" target="_blank">admui.com</a>
                </p>
            </footer>
        </div>
    </div>
</div>


<script src="<?php echo $domain['static']; ?>/js/login/jquery.js"></script>
<script src="<?php echo $domain['static']; ?>/js/login/formValidation.min.js" data-name="formValidation"></script>
<script src="<?php echo $domain['static']; ?>/js/login/bootstrap.min.js" data-deps="formValidation"></script>
<script src="<?php echo $domain['static']; ?>/js/jquery-form.js"></script>
<script src="<?php echo $domain['static']; ?>/js/login/login.js"></script>

</html>
