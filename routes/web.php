<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//登录页面
Route::get('/', function () {
    return view('login');
});

//学生主页面
Route::get('students','Scontroller@show');

//学生登记离校信息
Route::get('students/awayschool',function (){
    return view('awayschool');
});
Route::post('students/awayschool/submit','Controller@awaysubmit');
//查看通知页面
Route::get('students/getinform','Scontroller@getinform');
Route::get('students/getinform/postid/{id}','Scontroller@openinform');


//班长主页面
Route::get('monitor','Mcontroller@show');
//班长发布作业
Route::any('monitor/releasework',function (){
    return view('releasework');
});
Route::post('monitor/releasework/submit','Mcontroller@worksubmit');

//班长登记离校信息
Route::get('monitor/awayschool',function (){
    return view('awayschool');
});
Route::post('monitor/awayschool/submit','Controller@awaysubmit');
//班长发布通知
Route::get('monitor/releasemsg',function (){
    return view('releasemsg');
});
Route::post('monitor/releasemsg/submit','Controller@msgsubmit');


//教师主页面
Route::get('teacher','Tcontroller@show');
//教师发布通知
Route::get('teacher/releasemsg',function (){
    return view('releasemsg');
});
Route::post('teacher/releasemsg/submit','Controller@msgsubmit');

//微信接口
Route::any('wx/api', 'wxcontroller@api');

Route::any('wx/api2/{usersession}/{rank}/{avatarUrl}', 'Controller@wxlogin');//通过openid登录


//普通登录接口
Route::post('login','Controller@login');



