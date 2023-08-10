<?php

use App\Http\Controllers\AdminController\ExampleController;
use App\Http\Controllers\AdminController\OrdersController;
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

Route::get('/user/my_order',[My_order::class,'create']);

Route::get('/user/personal_information',[Personal_information::class,'create']);



Route::get('/admin/orders', [OrdersController::class, 'show']);


Route::get('/product_detail', [ProductController::class, 'show_product_detail']);

Route::get('/contact_us', [ContactUsController::class, 'show']);

Route::get('/home_page', [ProductController::class,'show_home_page']);
