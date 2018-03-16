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

Route::get('teacher','Tcontroller@show');

Route::get('monitor','Mcontroller@show');

Route::any('weixin/api', 'wxcontroller@api');

Route::post('login','Controller@login');