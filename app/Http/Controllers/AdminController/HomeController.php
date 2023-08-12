<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\product;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $totalOrders = Orders::count();
        $totalRevenue = Orders::sum('total_pay');
        $totalProducts = Product::count();
        $totalUsers = User::count();

        $recentOrders = Orders::orderBy('current_at', 'desc')->take(6)->get();


        $topSellingProducts = Product::orderBy('quantity', 'desc')->take(6)->get();

        foreach ($recentOrders as $order) {
            $order->formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $order->current_at)->format('d M Y');
        }
    


        return view('admin.home', compact('totalOrders', 'totalRevenue', 'totalProducts', 'totalUsers', 'recentOrders', 'topSellingProducts'));
        // return view('admin.home', compact('totalOrders', 'totalRevenue', 'totalProducts', 'totalUsers', 'recentOrders'));

    }



    

    // Các phương thức khác
}
