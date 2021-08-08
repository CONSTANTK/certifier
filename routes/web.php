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

Route::get('services', [\App\Http\Controllers\Front\ServicesController::class,'index'])->name('front.services');
Route::get('services/{service}', [\App\Http\Controllers\Front\ServicesController::class,'show'])->name('front.services.show');
//Route::post('services/store', [\App\Http\Controllers\Front\ServicesController::class,'processServices'])->name('front.services.process');

Route::get('educert', [\App\Http\Controllers\Front\EduCertController::class,'index'])->name('front.educert');
Route::post('educert/store', [\App\Http\Controllers\Front\EduCertController::class,'processEduCert'])->name('front.educert.process');

Route::get('certveri', [\App\Http\Controllers\Front\CertVeriController::class,'index'])->name('front.certveri');
Route::post('certveri/store', [\App\Http\Controllers\Front\CertVeriController::class,'processEduCert'])->name('front.certveri.process');

Route::get('addcert', [\App\Http\Controllers\Front\AddCertController::class,'index'])->name('front.addcert');
Route::post('addcert/store', [\App\Http\Controllers\Front\AddCertController::class,'processAddCert'])->name('front.addcert.process');

Route::get('payment', [\App\Http\Controllers\Front\PaymentController::class,'index'])->name('front.payment');
Route::post('payment/store', [\App\Http\Controllers\Front\PaymentController::class,'processPayment'])->name('front.payment.process');

Route::get('showservices', [\App\Http\Controllers\Front\ShowServicesController::class,'index'])->name('front.showservices');
Route::post('showservices/store', [\App\Http\Controllers\Front\ShowServicesController::class,'processShowServices'])->name('front.showservices.process');
