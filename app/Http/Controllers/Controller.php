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
            $name = DB::table('user')->where(['username'=>$username,'password'=>$password])->value('name');
            if(count($rank)!=0){
                $request->session()->put(['name'=>$name,'user'=>$username,'rank'=>$rank]);
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

    public function wxlogin(Request $request){
        $tmp =  $request->route('usersession');
        $rank = $request->route('rank');
        $avatarUrl = $request->route('avatarUrl');
        $avatarUrl = strtr($avatarUrl,'*','/');

        $username = DB::table('user')->where(['wxid'=>$tmp])->value('username');
        $name = DB::table('user')->where(['wxid'=>$tmp])->value('name');
        $request->session()->put(['user'=>$username,'rank'=>$rank]);
        if(count($username)!=0){
            $request->session()->put(['name'=>$name,'openid'=>$tmp,'user'=>$username,'rank'=>$rank,'avatarUrl'=>$avatarUrl]);
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
            return redirect('/')->with('error', '无账户!');
        }
    }



    public function awaysubmit(Request $request){
        $input = $request->all();
//        var_dump($input);

        $id=DB::table("awayschools")->insert(
            ['id'=>NULL,'postid'=>1,'username'=>session('user'),'phonenum'=>$input['phonenum'],
                'jzphonenum'=>$input['jzphonenum'],'towhere'=>$input['awayto'],
                'awaydate'=>$input['awaymonth'].$input['awayday']
            ]
        );
        return redirect()->back()->with('success', '提交信息成功!');

    }
}
