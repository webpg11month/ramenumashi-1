<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function userLogin(UserLoginRequest $req){
        $data = $req->all();
        $email =User::where('email',$req->email)->value('email');
        $password1 = User::where('email',$req->email)->value('password');

        $user_status = User::where('email',$req->email)->value('dlflag');
        if($user_status === '3'){
            Log::info('退会者');
            return redirect()->back();
        }

        if(Hash::check($req->password, $password1)){
            $credentials = $req->only('email', 'password');

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
