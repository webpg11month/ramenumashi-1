<?php

// 初期画面
Route::get('/', function () {
    return view('index');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


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
    Route::post('/message/resultlogin','Auth\LoginController@userLogin');
});

//ログイン中
Route::group(["middleware"=> "guest"], function() {
    //ログアウト処理
    Route::get('/logout','Auth\LoginController@logout');
    //予約キャンセル
    Route::get('/message/resultcancel','MypageController@delete');
    //予約お店詳細
    Route::get('/mypage/detail','MypageController@detail');
    //お店予約
    Route::get('/mypage','MypageController@mypage');
    Route::get('/reserve','ReserveController@reserve');
    Route::post('message/resultreserve','ReserveController@reserveResult');
    
    //お気に入り登録
    Route::get('/message/resultokini','MypageController@okini');
    //お気に入り詳細
    Route::get('/mypage/okinidetail','MypageController@okiniDetail');
    //お気に入り解除
    Route::get('/message/resultokinicancel','MypageController@okiDelete');
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
    
    Route::get('/shop/index','Shop\ShopController@shop');  
    
    //React処理実装
    Route::get('/shop/{any}', function () {
        return view('/shop/index');
    })->where('/shop/any','.*');  
    
    Route::get('/shop/shop_login','Shop\ShopLoginController@logout');
});

//お店検索結果
Route::get('/shop','SearchController@search');

