<?php
/**
 * Created by PhpStorm.
 * User: aspirepig
 * Date: 2018/3/15
 * Time: 17:09
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Tcontroller extends Controller{
    public function isteacher(){
        $rank = session('rank');
        if ($rank==3){
        }else{
            return redirect('http://sst.aspirepig.cn/')->with('error', '请重新登录!');
        }
    }

    public function show(){
        echo $this->isteacher();
        return view('teacher/teacher');
    }
}