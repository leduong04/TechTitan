<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\feed_back;

class FeedbackController extends Controller
{
    public function show()
    {
        $feedbacks = feed_back::all(); 


        return view('./Admin/feedback',compact('feedbacks'));
    }
}
