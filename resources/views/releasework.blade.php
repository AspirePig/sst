<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>发布作业</title>
<link href="../css/releasework/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header class="aui-bar aui-bar-nav">
        <a href="#"  onclick="javascript:window.location.href='./'" class="aui-pull-left aui-btn">
           <img src="../css/releasework/back.png" width="20px">
        </a>
        <div class="aui-title">发布作业</div>
    </header>
	<!-- 表单 -->
<form id="myform" action="releasework/submit" method="post">
    {{csrf_field()}}
<div class="work-form">
  <div class="items">
    <div class="items-name">
      科<em></em>目
    </div>
    <div class="items-con">
      <input type="text" name="subject">
    </div>
  </div>
  <div class="items">
    <div class="items-name">
      任课老师
    </div>
    <div class="items-con">
      <input type="text" name="teacher">
    </div>
  </div>
  <div class="items">
    <div class="items-name">
      作业内容
    </div>
    <div class="items-con">
      <textarea name="workcon" ></textarea>
    </div>
	 </div>

  <div class="items-submit">
   <input type="submit" value="提交信息">
  </div>
</form>
<!-- /表单 -->
</div>
@include('./common/message')
</body>
</html>
