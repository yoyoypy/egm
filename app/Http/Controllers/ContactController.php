<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Product;
use App\Category;
use App\Blog;

class ContactController extends Controller
{
    public function create()
    {
        $blogs      = Blog::all();
        $products   = Product::all();
        $categories = Category::all();

        return view('frontend.contact')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
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
        
        $blogs      = Blog::all();
        $products   = Product::all();
        $categories = Category::all();
        
        return view('frontend.contact')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }
}
