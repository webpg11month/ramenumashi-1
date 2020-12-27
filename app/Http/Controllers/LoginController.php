<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table\User;
use Illuminate\Support\Facades\Log;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{
    public function userLogin(Request $req){
        $data = $req->all();

        $user_id =User::where('user_id',$req->user_id)->value('user_id'); 
        $password = User::where('user_id',$req->user_id)->value('password');
        $user_status = User::where('user_id',$req->user_id)->value('dlflag');

        if($user_status === '3'){
            Log::info('退会者');
            return redirect()->back();
        }

        Log::info($user_id);
        Log::info($password);

        if(Hash::check($req->password, $password)){

            $credentials = $req->only('user_id', 'password');
            
            Log::info($credentials);
            if(Auth::attempt($credentials)){
                Log::info('ログイン成功');
                return view('/mypage');
            }else {
                Log::info('ログイン失敗');
                return redirect()->back();
            }
        }else{
            Log::info('パスワード失敗');
            return redirect()->back();
        }   
    }
    public function logout(){
        \Log::debug('ログアウト OK!');
        Auth::logout();
        //mash パスの処理 fix Start
        return redirect('/welcome')->with('user_msg', 'ログアウトしました。');
        //mash パスの修正 fix End
    }
}
