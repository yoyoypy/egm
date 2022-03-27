<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductVideoRequest;
use App\Product;
use App\ProductVideo;
use Illuminate\Http\Request;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ProductVideo::with('product')->get();

        return view('backend.pages.video.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('backend.pages.video.create')->with([
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductVideoRequest $request)
    {
        $data = $request->all();
        $data['video'] = $request->file('video')->store(
            'assets/video', 'public'
        );

        ProductVideo::create($data);

        return redirect()->route('productvideo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductVideo  $productVideo
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVideo $productVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductVideo  $productVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVideo $productVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductVideo  $productVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductVideo $productVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductVideo  $productVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductVideo::findOrFail($id);
        $item->delete();

        return redirect()->route('productvideo.index');
    }
}
