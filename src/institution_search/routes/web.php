<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// システム管理者
Route::group(['middleware' => ['auth', 'can:admin']], function () {
    //ここにルートを記述
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:shopadmin']], function () {
    // ショップを表示
    Route::get('/shop_admin', 'App\Http\Controllers\ShopAdminController@index');
    // ショップを作る
    Route::get('/create/shop_admin', 'App\Http\Controllers\ShopAdminController@create');
    Route::post('/create/shop_admin', 'App\Http\Controllers\ShopAdminController@store');
    // ショップを編集
    Route::get('/edit/shop_admin', 'App\Http\Controllers\ShopAdminController@edit');

    // プランを表示
    Route::get('/shop_plan_admin', 'App\Http\Controllers\ShopPlanAdminController@index');
    // プランを追加
    Route::get('/create/shop_plan_admin', 'App\Http\Controllers\ShopPlanAdminController@create');
    Route::post('/create/shop_plan_admin', 'App\Http\Controllers\ShopPlanAdminController@store');
    // プランを編集
    Route::get('/edit/shop_plan_admin', 'App\Http\Controllers\ShopPlanAdminController@edit');
});

// 利用者
Route::group(['middleware' => ['auth', 'can:user']], function () {
    // ショップリスト
    Route::get('/shop', 'App\Http\Controllers\ShopController@index');
    Route::get('/shop={shop}', 'App\Http\Controllers\ShopController@show');
    Route::get('/plan={shopPlan}/shop={shop}', 'App\Http\Controllers\ShopController@plan');
    // 予約ページ
    Route::get('/create/plan={shopPlan}/shop={shop}', 'App\Http\Controllers\ShopController@create');
    Route::post('/create', 'App\Http\Controllers\ShopController@store');
    // 予約確認ページ
    Route::get('/reserve', 'App\Http\Controllers\ReserveController@index');
});

// 管理者画面で使うと思う
// Route::get('/user', function () {
//     return view('user');
// });
<<<<<<< HEAD
Route::get('/user', \App\Http\Controllers\UserController::class)->name('社員一覧')->middleware('auth');

Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/shop/{shop}', 'App\Http\Controllers\ShopController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
// Route::get('/user', \App\Http\Controllers\UserController::class)->name('社員一覧')val->middleware('auth');
>>>>>>> feature-make-design_site
