<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
   public function home(){
       return view('home');
   }

    public function about(){
        return view('about');
    }

    public function review(){

       $reviews = new Contact();

        return view('review', ['reviews'=>$reviews->all()] );
    }

    public function reviewSend(Request $request){
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'review'=>'required|min:15|max:5000'
        ]);
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->review = $request->input('review');

        $review->save();

        return redirect()->route('review');
    }


}
