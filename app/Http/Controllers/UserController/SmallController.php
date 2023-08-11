<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;

class SmallController extends Controller
{
    public function show($categoryName)
    {   if ($categoryName === 'all') {
        $products = product::all();
    }
        $products = product::whereHas('category', function ($query) use ($categoryName) {
            $query->where('Name', $categoryName);
        })->get();
        $categories = categories::all();
        return view('./User/small', compact('products','categoryName','categories'));
    }

}
