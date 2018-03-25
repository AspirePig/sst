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
    public function isstudent(){
        $rank = session('rank');
        if ($rank==1 || $rank==2){
        }else{
            return redirect('http://sst.aspirepig.cn/')->with('error', '请重新登录!');
        }
    }

    public function show(){
        echo $this->isstudent();
        return view('students/students');
    }

    public function getinform(Request $request){
        echo $this->isstudent();
        $messages = DB::table('message')
            ->join('user','message.username','=','user.username')
            ->select('message.*','user.name')->orderBy('id', 'desc') ->paginate(5);
        return view('students/getinform',['messages'=>$messages]);
    }

    public function openinform(Request $request){
        echo $this->isstudent();
        $id = $request->route('id');
        $messages = DB::table('message')->where(['id'=>$id])->first();
        $name = DB::table('user')->where(['username'=>$messages->username])->value('name');
        return view('students/openinform',['message'=>$messages,'name'=>$name]);
    }

    public function getwork(Request $request){
        echo $this->isstudent();
        $messages = DB::table('homework')->orderBy('id', 'desc')->paginate(5);
        return view('students/getwork',['messages'=>$messages]);
    }

    public function openwork(Request $request){
        echo $this->isstudent();
        $id = $request->route('id');
        $messages = DB::table('homework')->where(['id'=>$id])->first();
        return view('students/openwork',['message'=>$messages]);
    }


}