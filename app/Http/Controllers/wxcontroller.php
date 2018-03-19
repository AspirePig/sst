<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class wxcontroller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function api(Request $request)
    {
        header('Content-type: text/json');
        $AppID = 'wx7ce95416f14521de';
        $AppSecret = 'e160b5b9da2615995c884712a62bc139';
        $js_code = $request->get('code');

        $url = "https://api.weixin.qq.com/sns/jscode2session?appid=$AppID&secret=$AppSecret&js_code=$js_code&grant_type=authorization_code";
        $openid = file_get_contents($url);
//        echo $openid;
        $openid =  substr($openid,-30,28);
//        echo $openid;
        $query = DB::table('user')->where(['wxid'=>$openid])->first();

        if(count($query->rank)!=0){
//            $tmp = md5($openid.rand());
//            $request->session()->put([$tmp=>$query->username]);
//            echo md5($openid.rand());

            $info = array("usersession" => $openid,  "rank" => $query->rank);
            echo json_encode($info);
        }

    }


}