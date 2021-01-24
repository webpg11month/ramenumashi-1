<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Table\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserLoginRequest;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{    
    //user:tsss@test.ne.jp
    //pass:mashmash! 

    public function userLogin(UserLoginRequest $req){
        $data = $req->all();
        Log::info($req->login);
        $user_status = User::where('email',$req->login)->value('dlflag');
        if(preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $req->login)){
            $email =User::where('email',$req->login)->value('email');
            $password1 = User::where('email',$req->login)->value('password');
            Log::info($email);
            $credentials = [
                'email' => $email,
                'password' => $req->password,
            ];
        }else {      
            $user_id = User::where('user_id',$req->login)->value('user_id');
            $password1 = User::where('user_id',$req->login)->value('password');
            $credentials = [
                'user_id' => $user_id,
                'password' => $req->password,
            ];   
            Log::info($user_id);
        }

        if($user_status === '3'){
            Log::info('退会者');
            return redirect()->back();
        }

        if(Hash::check($req->password, $password1)){
            Log::info($credentials);
            if(Auth::attempt($credentials)){
                Log::info('ログイン成功');
                $user = $req->all();
                $req->session()->regenerateToken();
                return view('/message/resultlogin',compact('user'));
            }else {
                Log::info('メールアドレスが違う');
                return redirect()->back();
            }
        }else{
            Log::info('パスワードが違う');
            return redirect()->back();
        }
        //return redirect()->back();
    }

    public function logout(){
        \Log::debug('testtestmash');     
        Auth::logout();
        \Log::debug('ログアウト成功:test');
        return redirect('/shop/shop_info');
    }
}
