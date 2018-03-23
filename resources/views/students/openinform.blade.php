<!DOCTYPE html>

<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>查看通知</title>
    <link href="http://sst.aspirepig.cn/css/students/getinform/bootstrap.min.css" rel="stylesheet">
    <link href="http://sst.aspirepig.cn/css/students/getinform/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<header class="aui-bar aui-bar-nav">
    <a href="#" onClick="javascript :window.location.href='../'" class="aui-pull-left aui-btn">
        <img src="http://sst.aspirepig.cn/css/students/getinform/back.png" width="20px">
    </a>
    <div class="aui-title">详细通知</div>
</header>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3 class="text-center">
                {{$message->title}}
            </h3>
            <p class=" text-center">{{$name}}</p>
            <hr/>
            <p class="" style="letter-spacing: 2px">{{$message->content}}</p>
            <br/>
            <p class="small text-right text-muted" >发布时间:{{$message->postdate}}</p>
        </div>
    </div>
</div>
</body>
</html>
