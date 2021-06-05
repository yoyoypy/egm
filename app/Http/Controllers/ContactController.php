<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact');
    }

    public function store()
    {
        //Mail::to('info@egm.co.id')->send(new Contact($contact));
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //dd($request()-all());
        Mail::to('info@egm.co.id')->send(new ContactFormMail());
    }
}
