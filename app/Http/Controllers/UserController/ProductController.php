<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show_product_detail()
    {
        return view('./User/product_detail');
    }

    public function show_home_page()
    {
        return view('./User/home_page');
    }
}
