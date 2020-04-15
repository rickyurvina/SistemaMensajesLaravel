<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request){
      //  return  $request;
       // return request('email');
           $message= request()->validate([
           'name'=>'required',
            'email'=>'required|email'
        ],['name.required'=> 'Necesito Tu Nombre']);

        Mail::to('ricky_uc12@hotmail.com')->queue(new MessageReceived($message));
      //  return new MessageReceived($message);
        return back()->with('status','Recibimos Tu mensaje');
    }
}
