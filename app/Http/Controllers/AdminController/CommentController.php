<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    public function show()
    {
        $comments = comment::all(); 
        return view('./Admin/comment',compact('comments'));
    }

    public function show_details($id){
        
        $comment = comment::findOrFail($id);
        $comment = comment::with('images')->findOrFail($id);
        return view('./Admin/detail_comment', compact('comment'));
    }

    public function delete($id)
    {
        $comment = comment::find($id);
        

        $comment->delete();

        return redirect()-> action([CommentController::class,'show'])->with('success','Dữ liệu xóa thành công.');
    }
}
