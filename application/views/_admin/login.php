<!DOCTYPE html>
<html lang="zh_cn">
<head>
    <meta charset="utf-8">
    <title>三叶草桌游水吧后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <!-- The styles -->
    <link id="bs-css" href="/assets/_admin/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="/assets/_admin/css/charisma-app.css" rel="stylesheet">
    <link href='/assets/_admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='/assets/_admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/assets/_admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='/assets/_admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/_admin/img/favicon.ico">
    <script src="/assets/_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>三叶草桌游水吧后台</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-4 center login-box">
            <div class="alert alert-info">
                   <? if($message) echo $message; else echo  "Please login with your Username and Password.";?>
            </div>
            <form class="form-horizontal"  action="/_admin/login" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->
</div><!--/.fluid-container-->
</body>
</html>