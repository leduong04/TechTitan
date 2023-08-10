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

Route::get('/admin/home', [HomeController::class,'create'])->name('admin.home');

Route::get('/my_order',[My_order::class,'create'])->name('user.my_order');

Route::get('/personal_information',[Personal_information::class,'create'])->name('user.personal_information');



Route::get('/admin/orders', [OrdersController::class, 'show'])->name('admin.orders');


// Route::get('/product_detail', [ProductController::class, 'show_product_detail'])->name('user.product_detail');

Route::get('/contact_us', [ContactUsController::class, 'show'])->name('user.contact_us');

Route::get('/home_page', [ProductController::class,'show_home_page'])->name('user.home_page');

Route::get('/login', [Login::class,'create'])->name('user.login');

Route::get('/cart', [Cart::class,'create'])->name('user.cart');

Route::get('/home_page/{id}', [ProductController::class, 'show_product_detail'])->name('user.product_detail');
