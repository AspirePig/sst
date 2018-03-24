<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>师生通</title>
    <link href="css/students/css.css" rel="stylesheet">
    <link href="css/students/iconfont.css" rel="stylesheet">
</head>
<body style="background-color:#c1c5ea;">
<header>师生通登录</header>



<div style="text-align:center " class="container-fluid">
    <div class="row-fluid" >
        <div class="span12">
            <form class="form-horizontal" action="login" method="post">
                <div class="control-group">
                    <label class="control-label" for="">用户名</label>
                    <div class="controls">
                        <input name="username" type="text" />
                    </div>
                </div>
                {{csrf_field()}}
                <div class="control-group">
                    <label class="control-label" for="inputPassword">密码</label>
                    <div class="controls">
                        <input id="inputPassword" name="password" type="password" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                         <button type="submit" class="btn">登陆</button>
                    </div>
                </div>
            </form>
            <p text-align="center">班长账号:yang 密码:yang</p>
            <p text-align="center">教师账号:wang 密码:wang</p>
            <p text-align="center">学生账号:he 密码:he</p>
        </div>
    </div>
</div>

@include('./common/message')


</body>
</html>