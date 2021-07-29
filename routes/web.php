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
//Mike-Berg New Implementations
Route::get('/', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.welcome');
Route::get('about-us', [\App\Http\Controllers\Front\WelcomeController::class,'about'])->name('front.about');

Route::get('contact-us', [\App\Http\Controllers\Front\ContactUsController::class,'index'])->name('front.contact.us');
Route::post('contact-us/store', [\App\Http\Controllers\Front\ContactUsController::class,'processContactUs'])->name('front.contact.us.process');

Route::get('login', [\App\Http\Controllers\Front\LoginController::class,'index'])->name('front.login');
Route::post('login/store', [\App\Http\Controllers\Front\LoginController::class,'processLogin'])->name('front.login.process');

Route::get('register', [\App\Http\Controllers\Front\RegisterController::class,'index'])->name('front.register');
Route::post('register/store', [\App\Http\Controllers\Front\RegisterController::class,'processRegister'])->name('front.register.process');

Route::get('login', [\App\Http\Controllers\Front\LoginController::class,'index'])->name('front.login');
Route::post('login', [\App\Http\Controllers\Front\LoginController::class,'processLogin'])->name('front.login.process');


Route::get('payment', function () {
    return view('payment');
});


Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
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

Route::get('services', function () {
    return view('services');
});
	


Route::get('ourservices', [\App\Http\Controllers\ourservicesController::class,'ourservices'] );

Route::get('payment', [\App\Http\Controllers\paymentController::class,'payment'] );

Route::get('register', [\App\Http\Controllers\RegisterController::class,'register'] );

Route::get('user/login', [\App\Http\Controllers\LoginController::class,'login'] );

Route::get('services', [\App\Http\Controllers\ServicesController::class,'services'] );


