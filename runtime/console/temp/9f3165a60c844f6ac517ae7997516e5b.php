<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\wamp\www\thinkphp5-yanghuan\My-Project/app/console/basics/view/utilities/index.html";i:1532286850;}*/ ?>
<title>辅助类</title>
<link rel="stylesheet" href="<?php echo $domain['static']; ?>/css/basics/utilities/utilities.css">
<div class="page animation-fade">
    <div class="page-header">
        <h1 class="page-title">辅助类</h1>
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
                <h3 class="panel-title">对齐</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">清除浮动与浮动</h4>
                            <table class="table table-bordered table-hover">
                                <colgroup>
                                    <col class="col-xs-1">
                                    <col class="col-xs-7">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th class="text-nowrap">类</th>
                                    <th>说明</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-nowrap">
                                        <code>.pull-left</code>
                                    </td>
                                    <td>元素浮动到左边</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <code>.pull-right</code>
                                    </td>
                                    <td>元素浮动到右边</td>
                                </tr>
                                <tr>
                                    <td class="text-nowrap">
                                        <code>.clearfix</code>
                                    </td>
                                    <td>清除浮动</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="example example-box">
                                <button type="button" class="btn btn-default btn-outline">左浮动</button>
                                <button type="button" class="btn btn-default btn-outline pull-right">右浮动</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">垂直对齐</h4>
                            <div class="example-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <colgroup>
                                            <col class="col-xs-2">
                                            <col class="col-xs-6">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="text-nowrap">类</th>
                                            <th>说明</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.vertical-align</code>
                                            </td>
                                            <td>添加该类到父元素，父元素要有固定高度</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.vertical-align-middle</code>
                                            </td>
                                            <td>添加该类到您需要上下居中对齐的元素上</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.vertical-align-bottom</code>
                                            </td>
                                            <td>添加该类到您需要底部对齐的元素上</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="example example-box container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vertical-align height-100">
                                                <div class="vertical-align-middle">
                                                    <button type="button" class="btn btn-default btn-outline">上下居中对齐
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vertical-align height-100">
                                                <div class="vertical-align-bottom">
                                                    <button type="button" class="btn btn-default btn-outline">底部对齐
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-lg-block"></div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">块级居中</h4>
                            <div class="example-body">
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.center-block</code>
                                        </td>
                                        <td>添加该类到需要居中显示的元素上</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="example example-box">
                                    <button type="button" class="btn btn-default btn-outline center-block">居中显示</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">文字相关</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">文本转换（仅针英文）</h4>
                            <div class="example-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <colgroup>
                                            <col class="col-xs-2">
                                            <col class="col-xs-6">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="text-nowrap">类</th>
                                            <th>说明</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.text-lowercase</code>
                                            </td>
                                            <td>英文字符小写</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.text-uppercase</code>
                                            </td>
                                            <td>英文字符大写</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">
                                                <code>.text-capitalize</code>
                                            </td>
                                            <td>英文首字母大写</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="example example-box">
                                    <p class="text-lowercase">Lowercased text.</p>
                                    <p class="text-uppercase">Uppercased text.</p>
                                    <p class="text-capitalize">Capitalized text.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">文本显示</h4>
                            <div class="example-body">
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-hide</code>
                                        </td>
                                        <td>用背景替换文本内容</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-truncate</code>
                                        </td>
                                        <td>文本截断</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-break</code>
                                        </td>
                                        <td>文本换行显示</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-nowrap</code>
                                        </td>
                                        <td>文本不换行，在一行显示</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="example example-box container-fluid">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-hide height-100" style="border:1px solid #e6e8ea; background-image: url(http://cdn.admui.com/demo/pjax/1.3.0/images/placeholder.png)">
                                                这是一段很长很长很长很长的文本内容，用来测试文本显示。
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-truncate height-100" style="border:1px solid #e6e8ea;">
                                                这是一段很长很长很长很长的文本内容，用来测试文本显示。
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-break height-100" style="border:1px solid #e6e8ea;">
                                                这是一段很长很长很长很长的文本内容，用来测试文本显示。
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-nowrap height-100" style="border:1px solid #e6e8ea;overflow: hidden;">
                                                这是一段很长很长很长很长的文本内容，用来测试文本显示。
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-lg-block"></div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">文本对齐</h4>
                            <div class="example-body">
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-top</code>
                                        </td>
                                        <td>顶部对齐</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-middle</code>
                                        </td>
                                        <td>上下居中</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-bottom</code>
                                        </td>
                                        <td>底部对齐</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-left</code>
                                        </td>
                                        <td>左对齐</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-center</code>
                                        </td>
                                        <td>居中显示</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-right</code>
                                        </td>
                                        <td>右对齐</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">
                                            <code>.text-justify</code>
                                        </td>
                                        <td>两端对齐</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="example example-box container-fluid">
                                    <div class="row">
                                        <div class="col-md-4 margin-bottom-10">
                                            <a class="avatar" href="javascript:;">
                                                <img class="width-50" src="http://cdn.admui.com/demo/pjax/1.3.0/images/portraits/1.jpg" alt="...">
                                            </a>
                                            <span class="text-top">测试文本</span>
                                        </div>
                                        <div class="col-md-4 margin-bottom-10">
                                            <a class="avatar" href="javascript:;">
                                                <img class="width-50" src="http://cdn.admui.com/demo/pjax/1.3.0/images/portraits/2.jpg" alt="...">
                                            </a>
                                            <span class="text-middle">测试文本</span>
                                        </div>
                                        <div class="col-md-4 margin-bottom-10">
                                            <a class="avatar" href="javascript:;">
                                                <img class="width-50" src="http://cdn.admui.com/demo/pjax/1.3.0/images/portraits/3.jpg" alt="...">
                                            </a>
                                            <span class="text-bottom">测试文本</span>
                                        </div>
                                    </div>
                                    <div class="margin-top-20">
                                        <p class="text-left">测试文本</p>
                                        <p class="text-center">测试文本</p>
                                        <p class="text-right">测试文本</p>
                                        <p class="text-justify">测试文本</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">字体大小</h4>
                            <div class="example-body">
                                <p>可选值：0, 10, 12, 14, 16, 18, 20, 24, 26, 30, 40, 50, 60, 70 , 80 。</p>
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-0</code></td>
                                        <td>font-size: 0px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-10</code></td>
                                        <td>font-size: 10px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-12</code></td>
                                        <td>font-size: 12px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-14</code></td>
                                        <td>font-size: 14px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-16</code></td>
                                        <td>font-size: 16px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-18</code></td>
                                        <td>font-size: 18px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.font-size-20</code></td>
                                        <td>font-size: 20px</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="example-wrap">
                            <h4 class="example-title">字体粗细</h4>
                            <div class="example-body">
                                <p>可选值：unset, 100, 200, 300, 400, 500, 600, 700, 800, 900 。</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <colgroup>
                                            <col class="col-xs-1">
                                            <col class="col-xs-7">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="text-nowrap">类</th>
                                            <th>说明</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-nowrap"><code>.font-weight-unset</code></td>
                                            <td>font-weight: unset</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.font-weight-100</code></td>
                                            <td>font-weight: 100</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">盒式模型</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">Padding</h4>
                            <div class="example-body">
                                <p>可选值：0, 3, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50 。</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <colgroup>
                                            <col class="col-xs-1">
                                            <col class="col-xs-7">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="text-nowrap">类</th>
                                            <th>说明</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-5</code></td>
                                            <td>padding: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-vertical-5</code></td>
                                            <td>
                                                <p>padding-top: 5px</p>
                                                <p>padding-bottom: 5px</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-horizontal-5</code></td>
                                            <td>
                                                <p>padding-left: 5px</p>
                                                <p>padding-right: 5px</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-top-5</code></td>
                                            <td>padding-top: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-right-5</code></td>
                                            <td>padding-right: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-bottom-5</code></td>
                                            <td>padding-bottom: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.padding-left-5</code></td>
                                            <td>padding-left: 5px</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">Margin</h4>
                            <div class="example-body">
                                <p>可选值：0, 3, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50 。</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <colgroup>
                                            <col class="col-xs-1">
                                            <col class="col-xs-7">
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th class="text-nowrap">类</th>
                                            <th>说明</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-5</code></td>
                                            <td>margin: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-vertical-5</code></td>
                                            <td>
                                                <p>margin-top: 5px</p>
                                                <p>margin-bottom: 5px</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-horizontal-5</code></td>
                                            <td>
                                                <p>margin-left: 5px</p>
                                                <p>margin-right: 5px</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-top-5</code></td>
                                            <td>margin-top: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-right-5</code></td>
                                            <td>margin-right: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-bottom-5</code></td>
                                            <td>margin-bottom: 5px</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"><code>.margin-left-5</code></td>
                                            <td>margin-left: 5px</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">Height</h4>
                            <div class="example-body">
                                <p>可选值：50, 100, 150, 200, 250, 300, 350, 400, 450, 500。</p>
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-50</code></td>
                                        <td>height: 50px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-100</code></td>
                                        <td>height: 100px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-150</code></td>
                                        <td>height: 150px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-200</code></td>
                                        <td>height: 200px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-250</code></td>
                                        <td>height: 250px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-300</code></td>
                                        <td>height: 300px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-350</code></td>
                                        <td>height: 350px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-400</code></td>
                                        <td>height: 400px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-450</code></td>
                                        <td>height: 450px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.height-500</code></td>
                                        <td>height: 500px</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">Width</h4>
                            <div class="example-body">
                                <p>可选值：50, 100, 150, 200, 250, 300, 350, 400, 450, 500 。</p>
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-50</code></td>
                                        <td>width: 50px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-100</code></td>
                                        <td>width: 100px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-150</code></td>
                                        <td>width: 150px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-200</code></td>
                                        <td>width: 200px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-250</code></td>
                                        <td>width: 250px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-300</code></td>
                                        <td>width: 300px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-350</code></td>
                                        <td>width: 350px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-400</code></td>
                                        <td>width: 400px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-450</code></td>
                                        <td>width: 450px</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.width-500</code></td>
                                        <td>width: 500px</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12">

                        <div class="example-wrap">
                            <h4 class="example-title">高度自适应</h4>
                            <div class="example-body table-responsive">
                                <table class="table table-bordered table-hover visiblity-utilities">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            超小屏幕
                                            <small>手机 (&lt;768px)</small>
                                        </th>
                                        <th>
                                            小屏幕
                                            <small>平板 (≥768px)</small>
                                        </th>
                                        <th>
                                            中等屏幕
                                            <small>桌面显示器 (≥992px)</small>
                                        </th>
                                        <th>
                                            大屏幕
                                            <small>大桌面显示器 (≥1200px)</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>50px</th>
                                        <td class="text-nowrap"><code>.height-xs-50</code></td>
                                        <td class="text-nowrap"><code>.height-sm-50</code></td>
                                        <td class="text-nowrap"><code>.height-md-50</code></td>
                                        <td class="text-nowrap"><code>.height-lg-50</code></td>
                                    </tr>
                                    <tr>
                                        <th>100px</th>
                                        <td class="text-nowrap"><code>.height-xs-100</code></td>
                                        <td class="text-nowrap"><code>.height-sm-100</code></td>
                                        <td class="text-nowrap"><code>.height-md-100</code></td>
                                        <td class="text-nowrap"><code>.height-lg-100</code></td>
                                    </tr>
                                    <tr>
                                        <th>150px</th>
                                        <td class="text-nowrap"><code>.height-xs-150</code></td>
                                        <td class="text-nowrap"><code>.height-sm-150</code></td>
                                        <td class="text-nowrap"><code>.height-md-150</code></td>
                                        <td class="text-nowrap"><code>.height-lg-150</code></td>
                                    </tr>
                                    <tr>
                                        <th>200px</th>
                                        <td class="text-nowrap"><code>.height-xs-200</code></td>
                                        <td class="text-nowrap"><code>.height-sm-200</code></td>
                                        <td class="text-nowrap"><code>.height-md-200</code></td>
                                        <td class="text-nowrap"><code>.height-lg-200</code></td>
                                    </tr>
                                    <tr>
                                        <th>250px</th>
                                        <td class="text-nowrap"><code>.height-xs-250</code></td>
                                        <td class="text-nowrap"><code>.height-sm-250</code></td>
                                        <td class="text-nowrap"><code>.height-md-250</code></td>
                                        <td class="text-nowrap"><code>.height-lg-250</code></td>
                                    </tr>
                                    <tr>
                                        <th>300px</th>
                                        <td class="text-nowrap"><code>.height-xs-300</code></td>
                                        <td class="text-nowrap"><code>.height-sm-300</code></td>
                                        <td class="text-nowrap"><code>.height-md-300</code></td>
                                        <td class="text-nowrap"><code>.height-lg-300</code></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <th>350px</th>
                                        <td class="text-nowrap"><code>.height-xs-350</code></td>
                                        <td class="text-nowrap"><code>.height-sm-350</code></td>
                                        <td class="text-nowrap"><code>.height-md-350</code></td>
                                        <td class="text-nowrap"><code>.height-lg-350</code></td>
                                    </tr>
                                    <tr>
                                        <th>400px</th>
                                        <td class="text-nowrap"><code>.height-xs-400</code></td>
                                        <td class="text-nowrap"><code>.height-sm-400</code></td>
                                        <td class="text-nowrap"><code>.height-md-400</code></td>
                                        <td class="text-nowrap"><code>.height-lg-400</code></td>
                                    </tr>
                                    <tr>
                                        <th>450px</th>
                                        <td class="text-nowrap"><code>.height-xs-450</code></td>
                                        <td class="text-nowrap"><code>.height-sm-450</code></td>
                                        <td class="text-nowrap"><code>.height-md-450</code></td>
                                        <td class="text-nowrap"><code>.height-lg-450</code></td>
                                    </tr>
                                    <tr>
                                        <th>500px</th>
                                        <td class="text-nowrap"><code>.height-xs-500</code></td>
                                        <td class="text-nowrap"><code>.height-sm-500</code></td>
                                        <td class="text-nowrap"><code>.height-md-500</code></td>
                                        <td class="text-nowrap"><code>.height-lg-500</code></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">杂项</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">无间距栅格</h4>
                            <div class="example-body">
                                <p>
                                    在 <code>.row</code> 添加 <code>.no-space</code> 类来实现无间距栅格。 </p>
                                <div class="example container-fluid">
                                    <div class="row no-space text-center">
                                        <div class="col-xs-3" style="border: 1px solid #ddd">col-3</div>
                                        <div class="col-xs-3" style="border: 1px solid #ddd">col-3</div>
                                        <div class="col-xs-3" style="border: 1px solid #ddd">col-3</div>
                                        <div class="col-xs-3" style="border: 1px solid #ddd">col-3</div>
                                    </div>
                                    <div class="row no-space text-center margin-top-10">
                                        <div class="col-xs-6" style="border: 1px solid #ddd">col-6</div>
                                        <div class="col-xs-6" style="border: 1px solid #ddd">col-6</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">显示相关</h4>
                            <div class="example-body">
                                <table class="table table-bordered table-hover">
                                    <colgroup>
                                        <col class="col-xs-1">
                                        <col class="col-xs-7">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">类</th>
                                        <th>说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-nowrap"><code>.inline</code></td>
                                        <td>类似 <code>display:inline;</code></td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.inline-block</code></td>
                                        <td>类似 <code>display:inline-block;</code></td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap"><code>.block</code></td>
                                        <td>类似 <code>display:block;</code></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-lg-block"></div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">屏幕阅读器和键盘导航内容</h4>
                            <div class="example-body">
                                <p>在所有设备上都不显示，<strong>除了屏幕阅读器</strong> 使用 <code>.sr-only</code> 。 可以结合
                                    <code>.sr-only</code> 使用 <code>.sr-only-focusable</code>
                                    当元素获得焦点时来重点突出元素（如只有键盘的用户），也可以混合使用。 </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="example-wrap">
                            <h4 class="example-title">三角箭头</h4>
                            <div class="example-body">
                                <p>使用三角符号可以指示某个元素具有下拉菜单的功能。注意，向上弹出式菜单中的三角符号是反方向的。</p>
                                <div class="example example-box">
                                    <span class="caret"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix visible-lg-block"></div>
                    <div class="col-lg-12">

                        <div class="example-wrap">
                            <h4 class="example-title">响应式工具</h4>
                            <div class="example-body table-responsive">
                                <table class="table table-bordered table-hover visiblity-utilities">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            超小屏幕
                                            <small>手机 (&lt;768px)</small>
                                        </th>
                                        <th>
                                            小屏幕
                                            <small>平板 (≥768px)</small>
                                        </th>
                                        <th>
                                            中等屏幕
                                            <small>桌面显示器 (≥992px)</small>
                                        </th>
                                        <th>
                                            大屏幕
                                            <small>大桌面显示器 (≥1200px)</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-nowrap"><code>.show</code></th>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.hide</code></th>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.visible-xs-*</code></th>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.visible-sm-*</code></th>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.visible-md-*</code></th>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.visible-lg-*</code></th>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <th class="text-nowrap"><code>.hidden-xs</code></th>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.hidden-sm</code></th>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.hidden-md</code></th>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                        <td class="is-visible">显示</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap"><code>.hidden-lg</code></th>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-visible">显示</td>
                                        <td class="is-hidden">隐藏</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


