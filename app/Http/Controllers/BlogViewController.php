<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;
use App\Category;

class BlogViewController extends Controller
{
    public function index()
    {
        $blogs      = Blog::all();
        $products   = Product::all();
        $categories = Category::all();

        return view('frontend.blog')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $products   = Product::all();
        $categories = Category::all();

        return view('frontend.blogdetail')->with([
            'blog'          => $blog,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }
}
