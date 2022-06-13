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

// トップページ
Route::get('/', function () {
    return view('index');
});

// Route::get('/user', function () {
//     return view('user');
// });
// トップページ
Route::get('/user', [\App\Http\Controllers\UserController::class])->name('お客様')->middleware('auth');

Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/shop/show/{id}', [App\Http\Controllers\ShopController::class, 'show'])->name('shop.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
