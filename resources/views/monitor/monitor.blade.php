@extends('../common/layout')

@section('jiben')
    <div class="box">
        <h2>基本功能</h2>
        <ul>
            <li><a href="monitor/releasemsg"><i class="iconfont icon-tongzhi"></i><span>发起通知</span></a></li>
            <li><a href="#"><i class="iconfont icon-liuyanban"></i><span>留言板</span></a></li>
            <li><a href="#"><i class="iconfont icon-vote"></i><span>微投票</span></a></li>
            <li><a href="#"><i class="iconfont icon-xiaoxi"></i><span>微请假</span></a></li>
            <li><a href="monitor/releasework"><i class="iconfont icon-fabu"></i><span>发布作业</span></a></li>
            <li><a href="#"><i class="iconfont icon-huodong"></i><span>发起活动</span></a></li>
            <li><a href="#"><i class="iconfont icon-shoufei"></i><span>发起收费</span></a></li>
            <li><a href="monitor/awayschool"><i class="iconfont icon-xuexiao"></i><span>离校信息</span></a></li>
        </ul>
    </div>
@stop

@section('weichaxun')
    <div class="box">
        <h2>微查询</h2>
        <ul>
            <li><a href="#"><i class="iconfont icon-user"></i><span>学生信息</span></a></li>
        </ul>
    </div>
@stop

@section('jiaowu')
    <div class="box">
        <h2>教务查询</h2>
        <ul>
            <li><a href="#"><i class="iconfont icon-qia"></i><span>一卡通</span></a></li>
            <li><a href="#"><i class="iconfont icon-biaoge"></i><span>查课表</span></a></li>
            <li><a href="#"><i class="iconfont icon-paobu"></i><span>阳光长跑</span></a></li>
            <li><a href="#"><i class="iconfont icon-kaoshi"></i><span>考试成绩</span></a></li>
        </ul>
    </div>
@stop