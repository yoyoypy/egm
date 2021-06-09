<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use App\Product;
use App\Gallery;

class ProductController extends Controller
{
    public function index()
    {
        $blogs      = Blog::all();
        $categories = Category::with('Product')->get();
        $products   = Product::with('Category', 'Galleries')->get();

        return view('frontend.product')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }

    public function show($slug)
    {
        $blogs      = Blog::all();
        $categories = Category::with('Product')->get();
        $products   = Product::with('Category', 'Galleries')->where('slug', $slug)->firstOrFail();

        return view('frontend.productdetail')->with([
            'blogs'         => $blogs,
            'products'      => $products,
            'categories'    => $categories
        ]);
    }
}
