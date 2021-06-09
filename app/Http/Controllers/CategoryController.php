<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use App\Product;
use App\Gallery;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $blogs      = Blog::all();
        $categories   = Category::with('Product')->where('slug', $slug)->firstOrFail();
        $products   = Product::with('Category', 'Galleries')->get();

        return view('frontend.category')->with([
            'blogs'           => $blogs,
            'products'        => $products,
            'categories'      => $categories
        ]);
    }
}
