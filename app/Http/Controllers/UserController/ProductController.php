<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;

class ProductController extends Controller
{
    //


    public function show_home_page()
    {
        $like_product = product::where('featured', 'Like') ->take(12)-> get();
        $accessories = product::where('category_id', 7) ->take(12)-> get();
        $tree_product = product::where('category_id', '!=', 7) ->take(12)->get();
        $categories = categories::all();

        return view('./User/home_page', compact('like_product', 'accessories', 'tree_product','categories'));
    }

    public function show_product_detail($id){
        $product = product::with('images')->findOrFail($id);
        return view('User.product_detail', compact('product'));
    }
    
}
