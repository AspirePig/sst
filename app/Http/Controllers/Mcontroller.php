<?php
/**
 * Created by PhpStorm.
 * User: aspirepig
 * Date: 2018/3/15
 * Time: 16:36
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Mcontroller extends Controller{
    public function show(){
        return view('monitor/monitor');
    }

    public function worksubmit(Request $request){
        $input = $request->all();
//        var_dump($input);
        $time = date('Y-m-d H:i:s', time());
        $id=DB::table("homework")->insert(
            ['id'=>NULL,'username'=>session('user'),'subject'=>$input['subject'],
                'teacher'=>$input['teacher'],'workcon'=>$input['workcon'],'postdate'=>$time
            ]
        );
        return redirect()->back()->with('success', '提交信息成功!');

    }//班长发布作业
}