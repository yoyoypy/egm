<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $categories = Category::with('Product')->get();

        return view('frontend.home')->with([
            'blogs'         => $blogs,
            'categories'    => $categories
        ]);

    }
}
