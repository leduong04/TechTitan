<?php

namespace App\Http\Controllers\AdminController;

use App\Models\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Exception;

class ProductAdminController extends Controller
{

    public function show(){
        $products = product::all(); 
        // $nhanviens = $nhanviens->get();
        return view('./Admin/product_list',compact('products'));
    }
    public function show_details($id){
        
        $product = product::findOrFail($id);
        // $pageTitle = 'Thông tin nhân viên';
        return view('./Admin/detai_pr', compact('product'));
    }
    public function delete($id)
    {
        $product = product::find($id);
        
        // Storage::delete('public/image/nhanvien/' . $product->img_link);
        


        $product->delete();

        return redirect()-> action([ProductAdminController::class,'show'])->with('success','Dữ liệu xóa thành công.');
        // return response()->json(['message' => 'Nhân viên đã được xóa thành công']);
    }

}
