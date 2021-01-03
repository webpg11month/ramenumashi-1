<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Table\User;
use App\Table\Shop;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //インデックス画面遷移 
    public function search(Request $req){

        $shops = Shop::orderBy('created_at', 'desc')->paginate(5);
        return view('/shop',compact('shops'));
    }
}
