<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[frontend\HomeController::class,'index'])->name('home');
Route::get('/about-us',[frontend\HomeController::class,'aboutUs'])->name('about-us');
Route::get('/cart',[frontend\HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[frontend\HomeController::class,'checkout'])->name('checkout');
Route::get('/contact-us',[frontend\HomeController::class,'contactUs'])->name('contact-us');
Route::get('/shop',[frontend\HomeController::class,'shop'])->name('shop');
