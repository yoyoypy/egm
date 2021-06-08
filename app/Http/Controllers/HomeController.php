<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs      = Blog::all();
        $products   = Product::all();
        $categories = Category::with('Product')->get();

        return view('frontend.home')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);

    }
}
