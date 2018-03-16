<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        if($username=="" || $password=="") {
            return redirect()->back()->with('error', '请输入用户名和密码!');
        }
        else{
            $rank = DB::table('user')->where(['username'=>$username,'password'=>$password])->value('rank');
            if(count($rank)!=0){
                $request->session()->put(['user'=>$username,'rank'=>$rank]);
                if ($rank==1){
                    return redirect('students');
                }
                if ($rank==2){
                    return redirect('monitor');
                }
                if ($rank==3){
                    return redirect('teacher');
                }
            }
            else{
                return redirect()->back()->with('error', '用户名或密码错误!');
            }


            }
    }

}
