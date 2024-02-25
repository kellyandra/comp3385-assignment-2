<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
       public function create()
    {
        return view('feedback-form');
    }

  
    public function send(Request $request): RedirectResponse
    {   //Validates
        $validated = $request->validate([
            'name'=> 'required|max:100',
            'email'=>'required|email',
            'comments'=>'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $comment = $request->input('comments');

        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
            ->send(new Feedback($name, $email, $comment));
       // return response()->json(['message' => 'Data sent successfully']);
       return redirect('/feedback/success');
    }
   public function success(){
    return view('success');
   }

}