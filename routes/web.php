<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', function () {
    return view('ourservices');
});


Route::get('payment', function () {
    return view('payment');
});


Route::get('register', function () {
    return view('register');
});

Route::get('user_login', function () {
    return view('user_login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('user_reg', function () {
    return view('user_reg');
});


Route::get('ourservices', [\App\Http\Controllers\ourservicesController::class,'ourservices'] );

Route::get('payment', [\App\Http\Controllers\paymentController::class,'payment'] );

Route::get('register', [\App\Http\Controllers\RegisterController::class,'register'] );

Route::get('user/login', [\App\Http\Controllers\LoginController::class,'user_login'] );

