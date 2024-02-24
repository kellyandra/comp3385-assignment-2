<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
       public function create()
    {
        return view('feedbackform');
    }

  
    public function send(Request $request)
    {
        return response()->json(['message' => 'Data sent successfully']);
    }
}