<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $blogs      = Blog::all();
        $products   = Product::orderBy('position')->with('Galleries')->get();
        $categories = Category::with('Product')->get();

        return view('frontend.home')->with([
            // 'blogs'         => $blogs,
            'categories'    => $categories,
            'products'      => $products
        ]);

    }
}
