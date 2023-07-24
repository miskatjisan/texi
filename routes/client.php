<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
// use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [UserAuthController::class, 'login'])->name('login');
Route::post('post-login', [UserAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [UserAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('', [UserAuthController::class, 'index']); 
Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');

Route::get('/booking/find', [BookingController::class, 'book'])->name('bookfind'); 
Route::get('/search/booking', [BookingController::class, 'searchforbook'])->name('bookserch'); 
Route::get('/booking/all', [BookingController::class, 'allbooking'])->name('all.booking'); 

Route::get('/make/order/{vehicle}', [BookingController::class, 'makeorder'])->name('make.order');

Route::post('/make/order/successfully', [BookingController::class, 'orderstore'])->name('order.store');

Route::get('/make/payment', [BookingController::class, 'makePayment'])->name('make.payment');


