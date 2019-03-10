<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('categories')->get();

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        $tag= Tag::all();

        return view('admin.product.create', compact('cat', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->id_categories = $request->cat;
        $product->save();

        $product->tags()->attach($request->tag);

        return redirect()->route('products.index')->with('status', 'Data '.$product->name.' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $selected = $product->tags->pluck('id')->toArray();

        return view('admin.product.show', compact('product', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $cat = Category::all();
        $tag = Tag::all();
        $selected = $product->tags->pluck('id')->toArray();

        return view('admin.product.edit', compact('product', 'tag', 'cat', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product->id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->id_categories = $request->cat;
        $product->save();
        $product->tags()->sync($request->tag);

        return redirect()->route('products.index')->with('status', 'Data '.$product->name.' berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id)->delete();

        return redirect()->route('products.index')->with('status', 'Data '.$product->name.' berhasil dihapus!');
    }
}
