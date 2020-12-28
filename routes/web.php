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
Route::get('/index','IndexController@index');

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

Route::group(["middleware"=> "loginCheck"], function() {
    //ログイン画面へ画面遷移 
    Route::get('/login','IndexController@login');
    //ログイン画面へ画面遷移
    Route::post('/mypage','LoginController@userLogin');
});
