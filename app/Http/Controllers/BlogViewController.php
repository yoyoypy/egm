<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogViewController extends Controller
{
    public function index()
    {
        $items = Blog::all();

        return view('frontend.blog')->with([
            'items' => $items
        ]);
    }

    public function show($slug)
    {
        $items = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.blogdetail')->with([
            'item' => $item
        ]);
    }
}
