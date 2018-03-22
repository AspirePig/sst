
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>离校信息</title>
<link href="../css/awayschool/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<header class="aui-bar aui-bar-nav">
        <a href="#" onClick="javascript :window.location.href='./'" class="aui-pull-left aui-btn">
           <img src="../css/awayschool/back.png" width="20px">
        </a>
        <div class="aui-title">离校信息</div>
    </header>
    <form id="myform" method="post" action="awayschool/submit">
        {{csrf_field()}}
    <div class="info">
    <ul class="aui-list aui-form-list">
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">姓名</div>
                    <div class="aui-list-item-input"><input name="name" type="text" placeholder="姓名"></div>
                </div>
            </li>
         
          <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">学号</div>
                    <div class="aui-list-item-input"><input name="account" type="text" placeholder="学号"></div>
                </div>
            </li>
            
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">本人电话 </div>
                    <div class="aui-list-item-input"><input name="phonenum" type="text" placeholder="本人电话"></div>
                </div>
            </li>
            
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">家长电话</div>
                    <div class="aui-list-item-input"><input name="jzphonenum"  type="text" placeholder="家长电话"></div>
                </div>
            </li>
            
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">离校去向</div>
                    <div class="aui-list-item-input"><input name="awayto"  type="text" placeholder="离校去向"></div>
                </div>
            </li>
            
            
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-label">离校时间</div>
                    <div class="aui-list-item-input" >
                        <select name="awaymonth" style="float:left; width:30%;">
                            <option>1月</option>
                            <option>2月</option>
                            <option>3月</option>
							<option>4月</option>
							<option>5月</option>
							<option>6月</option>
							<option>7月</option>
							<option>8月</option>
							<option>9月</option>
							<option>10月</option>
							<option>11月</option>
							<option>12月</option>
                        </select>
                         <select name="awayday" style="float:left;width:30%;">
                            <option>1号</option>
                            <option>2号</option>
                            <option>3号</option>
							<option>4号</option>
							<option>5号</option>
							<option>6号</option>
							<option>7号</option>
							<option>8号</option>
							<option>9号</option>
							<option>10号</option>
                             <option>11号</option>
                             <option>12号</option>
                             <option>13号</option>
                             <option>14号</option>
                             <option>15号</option>
                             <option>16号</option>
                             <option>17号</option>
                             <option>18号</option>
                             <option>19号</option>
                             <option>20号</option>
                             <option>21号</option>
                             <option>22号</option>
                             <option>23号</option>
                             <option>24号</option>
                             <option>25号</option>
                             <option>26号</option>
                             <option>27号</option>
                             <option>28号</option>
                             <option>29号</option>
                             <option>30号</option>
                             <option>31号</option>
                        </select>
                    </div>
                 
                </div>
            </li>
        </ul>
    </div>
        <div onclick="document.getElementById('myform').submit()" style="padding:.75rem;"><div class="aui-btn aui-btn-info aui-btn-block">提交信息</div></div>
    </form>
@include('./common/message')
</body>
</html>
