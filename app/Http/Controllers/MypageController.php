<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table\User;
use App\Table\Reserve;
use Illuminate\Support\Facades\Log;
use Auth;
use DB;

class MypageController extends Controller
{
    //indexの画面遷移 add Start
    public function mypage(){
        $user = Auth::user(); 
        $user_id = $user->user_id;
        #予約データ一覧
        $reserves = DB::table('reserve_tb')
                //カラムデータ処理
                // ->select('reserve_tb.reserve_id','shop_tb.img','shop_tb.shop_name','shop_tb.shop_id','reserve_tb.dlflag')
                ->where('reserve_tb.dlflag',1)
                ->where('reserve_tb.user_id',$user_id)
                ->join('shop_tb','reserve_tb.shop_id','=','shop_tb.shop_id')
                ->join('user_tb','reserve_tb.user_id','=','user_tb.user_id')
                ->orderBy('reserve_tb.created_at', 'desc')
                ->paginate(15);
        
        return view('/mypage',compact('reserves','user'));
    }

    public function edit(Request $req){
        $shopinfo = $req->all();
        //ユーザーID $req['user_id']でも取得可能だが、ログイン認証の方がよい
        $user = Auth::user(); 
        $user_id = $user->user_id;
        //予約ID
        $reserve_id = $req['reserve_id'];

        $reserves = DB::table('reserve_tb')
        ->where('reserve_tb.dlflag',1)
        ->where('reserve_tb.user_id',$user_id)
        ->where('reserve_tb.reserve_id',$reserve_id)
        ->join('shop_tb','reserve_tb.shop_id','=','shop_tb.shop_id')
        ->join('user_tb','reserve_tb.user_id','=','user_tb.user_id')->first();
        
        return view('/mypage/detail',compact('reserves'));
    }
}
