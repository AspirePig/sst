<?php
/**
 * Created by PhpStorm.
 * User: aspirepig
 * Date: 2018/3/15
 * Time: 16:35
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Scontroller extends Controller{
    public function show(){
        return view('students/students');
    }
}