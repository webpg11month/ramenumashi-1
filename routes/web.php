<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 初期画面
Route::get('/', function () {
    return view('index');
});

//インデックス画面へ画面遷移
Route::get('/','IndexController@index');

//新規登録画面へ画面遷移
Route::get('/register','IndexController@register');

//umashiについて画面へ画面遷移
Route::get('/umashi','IndexController@umashi');

//利用規約画面へ画面遷移
Route::get('/role','IndexController@role');

//ヘルプについて画面へ画面遷移
Route::get('/help','IndexController@help');

//お問い合わせ画面へ画面遷移
Route::get('/contact','IndexController@contact');

//プライバシー画面へ画面遷移
Route::get('/privacy','IndexController@privacy');

//プライバシー３画面へ画面遷移
Route::get('/privacy3','IndexController@privacy3');

//解約画面へ画面遷移
Route::get('/cancellation','IndexController@cancellation');

//解約画面へ画面遷移
Route::get('/shop','IndexController@shop');

// 新規登録処理 
Route::post('/message/resultregister','RegisterController@userRegister');

//お客様解約処理
Route::post('/message/cancellationresult','CancelController@userCancel');

Route::group(["middleware"=> "loginCheck"], function() {
    //ログイン画面へ画面遷移 
    Route::get('/login','IndexController@login');
    //ログイン結果画面へ画面遷移
    Route::post('/message/resultlogin','LoginController@userLogin');
});

//ログイン中
Route::group(["middleware"=> "guest"], function() {
    Route::get('/logout','LoginController@logout');
    Route::get('/mypage/index','MypageController@index');
    Route::get('/mypage','MypageController@mypage');
});

//お店画面画面へ画面遷移
Route::get('/shop/shop_info','IndexController@shopinfo');

Route::get('/shop/shop_register','IndexController@shopRegister');

Route::post('/message/resultshopregister','Shop\ShopRegisterController@shopRegisterResult');

//お店ログイン画面
Route::get('/shop/shop_login','IndexController@shopLogin');

Route::group(["middleware"=> "shopLoginCheck"], function() {
    //お店ログイン画面へ画面遷移
    Route::post('/message/resultshoplogin','Shop\ShopLoginController@shopLogin');
    Route::get('shop/logout','Shop\ShopLoginController@logout');
});

//お店検索結果
Route::get('/shop','SearchController@search');
