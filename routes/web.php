<?php

use App\Http\Controllers\daftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\katbarangController;
use App\Http\Controllers\customerController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/katmenu', function () {
    return view('katmenu');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/user',[userController::class,'show'] );

Route::get('/katmenu',[katbarangController::class,'show'] );

Route::get('/customer',[customerController::class,'show'] );

Route::get('/menu',[daftarController::class,'show'] );