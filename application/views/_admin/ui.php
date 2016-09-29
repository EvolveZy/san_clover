<!DOCTYPE html>
<html lang="zh_cn">
<head>
    <title>三叶草桌游水吧后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?php if(isset($_SESSION["name"])) echo $_SESSION["name"]; else  header("location:./login.php");   ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> 切换主题</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="ui.php"><i class="glyphicon glyphicon-eye-open"></i><span>饮  品</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i class="glyphicon glyphicon-edit"></i><span> 类 别</span></a>
                        </li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> 首页图片</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a href="login.php"><i class="glyphicon glyphicon-lock"></i><span> 退出</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">UI Features</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Extended Elements</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped responsive">
                    <tbody>
                    <tr>
                        <td><h3>Multiple File Upload</h3></td>
                        <td>
                            <input data-no-uniform="true" type="file" name="file_upload" id="file_upload">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><h3>CSS3 Animations</h3></td>
                        <td>
                            <h3 class="animated rubberBand">Animation</h3>
                        </td>
                        <td>
                            <code>&lt;h3 class="animated rubberBand"&gt;Animation&lt;/h3&gt;</code>
                            <br>
                            For all more animation classes like <code>rubberBand</code>, please refer to
                            <a target="_blank" href="http://daneden.github.io/animate.css/">http://daneden.github.io/animate.css/</a>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Star Rating</h3></td>
                        <td>
                            <div class="raty"></div>
                        </td>
                        <td><code>&lt;div class="raty"&gt;&lt;/div&gt;</code></td>
                    </tr>
                    <tr>
                        <td><h3>Toggle Switch</h3></td>
                        <td>
                            <input data-no-uniform="true" checked="" type="checkbox" class="iphone-toggle">
                        </td>
                        <td><code>&lt;input data-no-uniform="true" type="checkbox" class="iphone-toggle"&gt;</code></td>
                    </tr>
                    <tr>
                        <td><h3>Auto Growing Textarea</h3></td>
                        <td>
                            <textarea class="autogrow">Press enter here, it will grow automatically.</textarea>
                        </td>
                        <td><code>&lt;textarea class="autogrow"&gt;&lt;/textarea&gt;</code></td>
                    </tr>
                    <tr>
                        <td><h3>Popover</h3></td>
                        <td>
                            <a href="#" class="btn btn-danger" data-toggle="popover"
                               data-content="And here's some amazing content. It's very engaging. right?"
                               title="A Title">Click for popover</a>
                        </td>
                        <td><code>&lt;a href="#" class="btn btn-danger" data-toggle="popover" data-content="And here's
                                some amazing content. It's very engaging. right?" title="A Title"&gt;hover for popover&lt;/a&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Dialog</h3></td>
                        <td>
                            <a href="#" class="btn btn-info btn-setting">Click for dialog</a>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><h3>Tooltip</h3></td>
                        <td>
                            <a href="#" title="Tooltip, you can change the position." data-toggle="tooltip"
                               class="btn btn-warning">Hover for tooltip</a>
                        </td>
                        <td><code>&lt;a href="#" title="Tooltip, you can change the position, for example use
                                data-placement="left"." data-toggle="tooltip" class="btn btn-warning"&gt;Hover for
                                tooltip&lt;/a&gt;</code></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<div class="row">
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-tasks"></i> Progress Bars</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <h3>Basic</h3>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                         aria-valuemax="100" style="width: 60%;">
                        60%
                    </div>
                </div>

                <h3>Animated</h3>

                <div class="progress progress-striped progress-success active">
                    <div class="progress-bar" style="width: 50%;"></div>
                </div>
                <h3>Additional Colors</h3>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete (danger)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-eye-open"></i> Labels and Annotations</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Labels</th>
                        <th>Markup</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="label-default label">Default</span>
                        </td>
                        <td>
                            <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label-success label label-default">Success</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label-warning label label-default">Warning</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label-default label label-danger">Danger</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-danger"&gt;Danger&lt;/span&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="label-info label label-default">Info</span>
                        </td>
                        <td>
                            <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<div class="row">
    <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-bullhorn"></i> Alerts</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content alerts">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-7">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-bell"></i> Notifications</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="alert alert-info">
                    Click buttons below to see Pop Notifications.
                </div>
                <p class="center">
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is a success notification&quot;,&quot;layout&quot;:&quot;topLeft&quot;,&quot;type&quot;:&quot;success&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Top Left
                    </button>
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Top Center (fade)
                    </button>
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;error&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Top Right
                    </button>
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is a success information&quot;,&quot;layout&quot;:&quot;top&quot;,&quot;type&quot;:&quot;information&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Top Full Width
                    </button>
                </p>
                <p class="center">
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;center&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Center (fade)
                    </button>
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;center&quot;,&quot;type&quot;:&quot;error&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Center
                    </button>
                </p>

                <p class="center">
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an error notification&quot;,&quot;layout&quot;:&quot;bottomLeft&quot;,&quot;type&quot;:&quot;error&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Left
                    </button>
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Right (fade)
                    </button>
                </p>

                <p class="center">
                    <button class="btn btn-primary noty"
                            data-noty-options="{&quot;text&quot;:&quot;This is an alert&quot;,&quot;layout&quot;:&quot;bottom&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;closeButton&quot;:&quot;true&quot;}">
                        <i class="glyphicon glyphicon-bell icon-white"></i> Bottom Full Width with Close Button
                    </button>
                </p>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-7">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-refresh"></i> Ajax Loaders</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="ajax-loaders">
                                            <li><img src="img/ajax-loaders/ajax-loader-1.gif"
                                 title="img/ajax-loaders/ajax-loader-1.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-2.gif"
                                 title="img/ajax-loaders/ajax-loader-2.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-3.gif"
                                 title="img/ajax-loaders/ajax-loader-3.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-4.gif"
                                 title="img/ajax-loaders/ajax-loader-4.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-5.gif"
                                 title="img/ajax-loaders/ajax-loader-5.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-6.gif"
                                 title="img/ajax-loaders/ajax-loader-6.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-7.gif"
                                 title="img/ajax-loaders/ajax-loader-7.gif"></li>
                                            <li><img src="img/ajax-loaders/ajax-loader-8.gif"
                                 title="img/ajax-loaders/ajax-loader-8.gif"></li>
                                    </ul>
                <span class="clearfix">From / More <a href="http://ajaxload.info/"
                                                      target="_blank">http://ajaxload.info/</a></span>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Charisma Demo 2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-5108790028230107"
                 data-ad-slot="3193373905"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 email-subscription-footer">
            <div class="mc_embed_signup">
                <form action="//halalit.us3.list-manage.com/subscribe/post?u=444b176aa3c39f656c66381f6&amp;id=eeb0c04e84" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div>
                        <label>Keep up with my work</label>
                        <input type="email" value="" name="EMAIL" class="email" placeholder="Email address" required>

                        <div class="power_field"><input type="text" name="b_444b176aa3c39f656c66381f6_eeb0c04e84" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" class="button"></div>
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->
        </div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

