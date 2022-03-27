<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\Gallery;
use App\Brochure;
use App\Http\Requests\ProductRequest;
use App\ProductVideo;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::with('Category')->get();

        return view('backend.pages.product.index')->with([
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
        return view('backend.pages.product.create')->with([
            'categories' => $categories = Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //dd($request);
        $data = $request->all();
        Product::create([
            'slug' => Str::slug($request->product_name),
            'category_id' => $request->input('category_id'),
            'position' => $request->input('position'),
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description')
        ]);
        return redirect()->route('productlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::with('Category')->findOrFail($id);
        //dd($item);

        return view('backend.pages.product.edit')->with([
            'item' => $item,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->product_name);

        $item = Product::findOrFail($id);
        $item->update($data);

        return redirect()->route('productlist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('productlist.index');
    }

    public function gallery(Request $request, $id)
    {
        $product = Product::findorFail($id);
        $items = Gallery::with('product')
            ->where('products_id', $id)
            ->get();

        return view('backend.pages.product.gallery')->with([
            'product' => $product,
            'items' => $items
        ]);
    }

    public function brochure(Request $request, $id)
    {
        $product = Product::findorFail($id);
        $items = Brochure::with('product')
            ->where('products_id', $id)
            ->get();

        return view('backend.pages.product.brochure')->with([
            'product' => $product,
            'items' => $items
        ]);
    }

    public function video(Request $request, $id)
    {
        $product = Product::findorFail($id);
        $items = ProductVideo::with('product')
            ->where('product_id', $id)
            ->get();

        return view('backend.pages.product.video')->with([
            'product' => $product,
            'items' => $items
        ]);
    }
}
