<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>登录</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
<div class="login">
    <div class="welcome"><img src="css/welcome.png"></div>
    <div class="login-form">
        <form id="myform" method="post" action="login">
            {{csrf_field()}}
        <div class="login-inp"><label>登录</label><input type="text" name="username" placeholder=""></div>
        <div class="login-inp"><label>密码</label><input type="password" name="password" placeholder=""></div>
        </form>
        <div onclick="document.getElementById('myform').submit()" class="login-inp"><a href="#" >立即登录</a></div>
    </div>
    <div class="login-txt"><a href="#">立即注册</a>|<a href="#">忘记密码？</a></div>
    @include('./common/message')
</div>
</body>
</html>



