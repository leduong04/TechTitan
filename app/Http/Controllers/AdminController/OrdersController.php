<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\orders;

class OrdersController extends Controller
{

    public function show()
    {
        $orders = orders::all(); 

        return view('./Admin/orders',compact('orders'));
    }
    
    public function show_details($id){
        
        $order = orders::findOrFail($id);
        // $pageTitle = 'Thông tin nhân viên';
        return view('./Admin/detail_order', compact('order'));
    }

    public function delete($id)
    {
        $order = orders::find($id);
        
        // Storage::delete('public/image/nhanvien/' . $product->img_link);

        $order->delete();

        return redirect()-> action([OrdersController::class,'show'])->with('success','Dữ liệu xóa thành công.');
    }
}
