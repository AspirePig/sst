<?php
/**
 * Created by PhpStorm.
 * User: aspirepig
 * Date: 2018/3/15
 * Time: 16:35
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Scontroller extends Controller{
    public function show(){

        return view('students/students');
    }

    public function getinform(Request $request){
        $messages = DB::table('message')
            ->join('user','message.username','=','user.username')
            ->select('message.*','user.name')->paginate(5);
        return view('students/getinform',['messages'=>$messages]);
    }

    public function openinform(Request $request){
        $id = $request->route('id');
        $messages = DB::table('message')->where(['id'=>$id])->first();
        $name = DB::table('user')->where(['username'=>$messages->username])->value('name');
        return view('students/openinform',['message'=>$messages,'name'=>$name]);
    }
}