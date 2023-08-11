<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function show(){
        return view('./Admin/product_list');
    }
}
