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

// Route::get('/user', function () {
//     return view('user');
// });
Route::get('/user', \App\Http\Controllers\UserController::class)->name('社員一覧')->middleware('auth');

Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/shop/{shop}', 'App\Http\Controllers\ShopController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
