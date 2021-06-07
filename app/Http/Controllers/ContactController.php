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
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('info@egm.co.id')->send(new ContactFormMail($data));

        flash('Thanks For Your Message! We Will Get In Touch Soon!')->success();
        return view('frontend.contact');
    }
}
