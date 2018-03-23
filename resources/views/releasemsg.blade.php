<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>离校信息</title>
<link href="../css/releasemsg/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header class="aui-bar aui-bar-nav">
        <a href="#"  onclick="javascript:window.location.href='./'" class="aui-pull-left aui-btn">
           <img src="../css/releasemsg/back.png" width="20px">
        </a>
        <div class="aui-title">发布通知</div>
    </header>
    <div class="info">
        <form id="myform" method="post" action="releasemsg/submit">
            {{csrf_field()}}
    <ul class="aui-list aui-form-list">
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">通知标题</div>
                    <div class="aui-list-item-input"><input type="text" name='title' placeholder="标题"></div>
                </div>
            </li>
           <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">通知内容</div>
                    <div class="aui-list-item-input">
                        <textarea rows="5" type="text" name='content' rows="10" placeholder="内容"></textarea>
                    </div>
                </div>
            </li>
        </ul>
        </form>
    </div>
    <div onclick="document.getElementById('myform').submit()" style="padding:.75rem;"><div class="aui-btn aui-btn-info aui-btn-block">提交信息</div></div>
@include('./common/message')
</body>
</html>
