<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //ログインへ画面遷移 
    public function login(){
        return view('login');
    }

    //インデックス画面遷移 
    public function index(){
        return view('index');
    }

    //インデックス画面遷移 
    public function register(){
        return view('register');
    }

    //umashiについて画面遷移 
    public function umashi(){
        return view('umashi');
    }

    //問い合わせ画面遷移 
    public function contact(){
        return view('contact');
    }

    //ヘルプ画面遷移 
    public function help(){
        return view('help');
    }

    //利用規約画面遷移 
    public function role(){
        return view('role');
    }

    //プライバシー画面遷移 
    public function privacy(){
        return view('privacy');
    }
    //プライバシー３画面遷移 
    public function privacy3(){
        return view('privacy3');
    }
    //解約画面遷移 
    public function cancellation(){
        return view('cancellation');
    }
    //お店画面遷移 
    public function shop(){
        return view('shop');
    }
    
}
