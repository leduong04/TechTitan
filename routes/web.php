<?php

use App\Http\Controllers\AdminController\OrdersController;
use App\Http\Controllers\UserController\ContactUsController;
use App\Http\Controllers\UserController\ProductController;
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




Route::get('/admin/orders', [OrdersController::class, 'show']);


Route::get('/product_detail', [ProductController::class, 'show_product_detail']);

Route::get('/contact_us', [ContactUsController::class, 'show']);

Route::get('/home_page', [ProductController::class,'show_home_page']);
