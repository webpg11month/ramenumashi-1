<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class MypageController extends Controller
{
    //indexの画面遷移 add Start
    public function mypage(){
        $user = Auth::user(); 
        return view('/mypage',compact('user'));
    }

    public function index(){
        $user = Auth::user(); 
        return view('mypage/index',compact('user'));
    }
}
