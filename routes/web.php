<?php

use App\Http\Controllers\AdminController\ExampleController;
use App\Http\Controllers\AdminController\OrdersController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\UserController\Cart;
use App\Http\Controllers\UserController\Personal_information;
use App\Http\Controllers\UserController\ProductController;
use App\Http\Controllers\UserController\ContactUsController;
use App\Http\Controllers\UserController\My_order;
use App\Http\Controllers\UserController\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/home', [HomeController::class,'create']);

Route::get('/my_order',[My_order::class,'create']);

Route::get('/personal_information',[Personal_information::class,'create']);



Route::get('/admin/orders', [OrdersController::class, 'show']);


Route::get('/product_detail', [ProductController::class, 'show_product_detail']);

Route::get('/contact_us', [ContactUsController::class, 'show']);

Route::get('/home_page', [ProductController::class,'show_home_page']);

Route::get('/login', [Login::class,'create']);

Route::get('/cart', [Cart::class,'create']);
