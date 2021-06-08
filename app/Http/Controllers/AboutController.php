<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Blog;

class AboutController extends Controller
{
    public function index()
    {
        $blogs      = Blog::all();
        $products   = Product::all();
        $categories = Category::all();

        return view('frontend.about')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }
}
