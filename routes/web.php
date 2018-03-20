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

Route::get('/', function () {
    return view('login');
});

Route::get('students','Scontroller@show');

Route::get('monitor/awayschool',function (){
    return view('awayschool');
});
Route::post('monitor/awayschool/submit','Controller@awaysubmit');


Route::get('students/awayschool',function (){
    return view('awayschool');
});
Route::post('students/awayschool/submit','Controller@awaysubmit');

Route::get('monitor/releasework',function (){
    return view('releasework');
});

Route::post('monitor/releasework',function (){
    return view('releasework');
});

Route::get('teacher','Tcontroller@show');


Route::get('monitor','Mcontroller@show');

Route::any('wx/api', 'wxcontroller@api');

Route::any('wx/api2/{usersession}/{rank}/{avatarUrl}', 'Controller@wxlogin');

Route::post('login','Controller@login');



Route::post('monitor/releasework/submit','Mcontroller@worksubmit');