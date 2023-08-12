<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\aboutcontroller as ControllersAboutcontroller;
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
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\UserController\SmallController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AboutController1;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'show_home_page'])->name('user.home_page');







// Route::get('/product_detail', [ProductController::class, 'show_product_detail'])->name('user.product_detail');



// Route::get('/home_page', [ProductController::class,'show_home_page'])->name('user.home_page');

Route::get('/login', [Login::class,'create'])->name('user.login');

Route::get('/contact_us', [ContactUsController::class, 'show'])->name('user.contact_us');
Route::get('/small/{categoryName}', [SmallController::class,'show'])->name('category.products');
Route::get('/home_page/{id}', [ProductController::class, 'show_product_detail'])->name('user.product_detail');
Route::get('/home_page', [ProductController::class,'show_home_page'])->name('user.home_page');








Route::get('/sign', [Login::class,'show'])->name('user.sign');


// test add product view
Route::get('/add', function () {
    return view('/Admin/add_product');
});

Route::get('/about',[aboutcontroller::class,'show'])->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::middleware(['login', 'role.user'])->group(function () {
    Route::get('/admin/home', [HomeController::class,'create'])->name('admin.home');
    Route::get('/admin/orders', [OrdersController::class, 'show'])->name('admin.orders');
    Route::get('/admin/product', [ProductAdminController::class, 'show']);
    Route::get('/add', function () {
        return view('/Admin/add_product');
    });
});

Route::middleware('login')->group(function () {
    // Route::get('/cart', [Cart::class,'create'])->name('user.cart');
    Route::get('/my_order',[My_order::class,'create'])->name('user.my_order');
    Route::get('/personal_information',[Personal_information::class,'create'])->name('user.personal_information');
    Route::get('/change_password',[ChangePassController::class,'showchange'])->name('user.change_password');
    Route::POST('/update-profile',[Personal_information::class,'updateProfile'])->name('user.update_profile');
    Route::post('/change-password', [ChangePassController::class, 'changePassword'])->name('user.change_password.post');
    Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

    
});
