<?php

use App\Http\Controllers\AdminController\ExampleController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\OrdersController;
use App\Http\Controllers\UserController\My_order;
use App\Http\Controllers\UserController\Personal_information;
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

Route::get('/example', [ExampleController::class, 'show']);


Route::get('/admin/orders', [OrdersController::class, 'show']);
