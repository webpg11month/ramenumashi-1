<?php

use Illuminate\Http\Request;
use App\Table\User;
use Illuminate\Support\Facades\Log;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('/shop/user',function (Request $request) {
    $user_tb = User::all();	
	return response()->json(['user_tb' => $user_tb]);

});

Route::get('/shop/user/{user}', function(User $user){

	return response()->json(['user' => $user]);

});