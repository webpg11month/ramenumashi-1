<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Table\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //shop mash
    //     $this->middleware('guest')->except('logout');
    // }
    
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
    }

    public function logout(){
        
        Auth::logout();
        \Log::debug('ログアウト成功');
        return redirect('/');
    }
}
