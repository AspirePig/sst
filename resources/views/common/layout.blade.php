<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>师生通</title>
    <link href="css/monitor/css.css" rel="stylesheet">
    <link href="css/monitor/iconfont.css" rel="stylesheet">
    <link href="css/teacher/css.css" rel="stylesheet">
    <link href="css/teacher/iconfont.css" rel="stylesheet">
    <link href="css/students/css.css" rel="stylesheet">
    <link href="css/students/iconfont.css" rel="stylesheet">
</head>
<body>
<header>师生通</header>
<div class="user">
    <div class="userhead"><img src={{session('openid')?session('avatarUrl'):"css/monitor/bz.jpg"}}></div>
    <div class="usernav">
        <h1>{{session('name')}}</h1>
        <h3>权限：{{session('rank')>2?"辅导员":(session('rank')>1?"班长":"学生")}}@yield('monitor')</h3>
    </div>
</div>


@yield('jiben')

@yield('weichaxun')

@yield('jiaowu')


</body>
</html>