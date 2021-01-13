<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReserveController extends Controller
{
    //ログインしているユーザーのみ予約可能
    public function __construct(){
        $this->middleware('guest');
    }
    
    public function reserve()
    {   
        //お店情報を取得
        //予約画面に反映
        return view('/reserve');
    }
    public function reserveResult(Request $req){
        $data = $req->all();
        Log::info($data);
        $reserve_date = $req->date ." ". $req->time;
        //欲しいデータyyyy/mm/dd/ hh:mm:ss
        Log::info($reserve_date);
        //上記内容のデータがあるかの判定 trueの場合は処理が完了する
        
        //多重予約対策　占有ロック　共有ロック


        return view('/message/resultreserve');
    }
}
