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

// Admin controller
use App\Http\Controllers\AdminController\ProductAdminController;
<<<<<<< HEAD
use App\Http\Controllers\AdminController\CommentController;
=======
use App\Http\Controllers\UserController\SmallController;

>>>>>>> origin/thanh
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


// ---------------------

Route::get('/admin/orders', [OrdersController::class, 'show'])->name('admin.orders');
Route::get('/admin/order_details/{id}', [OrdersController::class, 'show_details'])->name('detail_order');
Route::DELETE('/admin/order_details/delete/{id}', [OrdersController::class, 'delete']);

<<<<<<< HEAD
// ----------------------------
Route::get('/product_detail', [ProductController::class, 'show_product_detail'])->name('user.product_detail');
=======

// Route::get('/product_detail', [ProductController::class, 'show_product_detail'])->name('user.product_detail');
>>>>>>> origin/thanh

Route::get('/contact_us', [ContactUsController::class, 'show'])->name('user.contact_us');

Route::get('/home_page', [ProductController::class,'show_home_page'])->name('user.home_page');

Route::get('/login', [Login::class,'create'])->name('user.login');

Route::get('/cart', [Cart::class,'create'])->name('user.cart');


<<<<<<< HEAD
=======
Route::get('/home_page/{id}', [ProductController::class, 'show_product_detail'])->name('user.product_detail');

Route::get('/admin/product', [ProductAdminController::class, 'show']);
>>>>>>> origin/thanh

Route::get('/small/{categoryName}', [SmallController::class,'show'])->name('category.products');

Route::get('/sign', [Login::class,'show'])->name('user.sign');


// test add product view
Route::get('/add', function () {
    return view('/Admin/add_product');
});

<<<<<<< HEAD
Route::get('/admin/product', [ProductAdminController::class, 'show']);
Route::get('/admin/product_details/{id}', [ProductAdminController::class, 'show_details'])->name('detail_product');
Route::DELETE('/admin/product_details/delete/{id}', [ProductAdminController::class, 'delete']);

// admin comment
Route::get('/admin/comment', [CommentController::class, 'show']);
Route::DELETE('/admin/comment/delete/{id}', [CommentController::class, 'delete']);
Route::get('/admin/comment_details/{id}', [CommentController::class, 'show_details'])->name('detail_comment');



=======
>>>>>>> origin/thanh
