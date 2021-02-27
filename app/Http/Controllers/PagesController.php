<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisitorContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
      return view('pages.index');
    }

    public function showContactForm()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
      $data = [
        'name' => $request->name,
        'email' =>$request->email,
        'message' =>$request->message,
      ];

      Mail::to('mwengibrian@gmail.com')->send (new VisitorContact($data));

      Session::flash('message', 'Thank you for your email');
      return redirect()->route('contact.show');
    }
     
  }