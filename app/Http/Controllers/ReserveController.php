<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Table\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReserveController extends Controller
{
    //ログインしているユーザーのみ予約可能
    public function __construct(){
        $this->middleware('guest');
    }
    
    public function reserve(Request $req)
    {   
        //お店情報を取得
        //予約画面に反映
        $user_id = $req->shop_id;
        //Log::info($user_id);
        return view('/reserve',compact('user_id'));
    }
    public function reserveResult(Request $req){
        $data = $req->all();
        //ログイン中のユーザーID取得
        $user_id = Auth::user()->user_id;
        //お店ID
        $shop_id = $req->shop_id;
        Log::info($user_id);
        Log::info($shop_id);
        //予約時間
        $reserve_time = $req->date ." ". $req->time;
        //欲しいデータyyyy/mm/dd/ hh:mm:ss
        Log::info($reserve_time);
        //お店情報と時間が両方一致した場合のSQL文
        $userinfos = Reserve::where('reserve_time', $reserve_time)->exists();
        //存在しない場合
        if(!$userinfos){
        }
        //上記内容のデータがあるかの判定 trueの場合は処理が完了する
        // $reserve_infos = Reserve::create([
        //     'reserve_id' => $user['user_id'],
        //     'user_id' => $user,
        //     'tel' => $user['tel'],
        //     'age' => $user['age'],
        //     'reserve_time' => $reserve_date,
        //     'dlflag'=> 1
        // ]);
        //多重予約対策　占有ロック　共有ロック


        return view('/message/resultreserve');
    }
}
