<?php
/**
 * Created by PhpStorm.
 * User: aspirepig
 * Date: 2018/3/15
 * Time: 17:09
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Tcontroller extends Controller{
    public function show(){
        return view('teacher/teacher');
    }
}