<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_produk = new \App\Product;
        $new_produk->nama_produk = $request->get('nama_produk');
        $new_produk->deskripsi = $request->get('deskripsi');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('product','public');
            $new_produk->foto = $file;
        };
        $new_produk->save();
        return redirect('/dashboard/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = \App\Product::findOrFail($id);
        $product->nama_produk = $request->get("nama_produk");
        $product->deskripsi = $request->get("deskripsi");
        if ($request->file('foto')) {
            if($product->foto && file_exists(storage_path('app/public/' . $product->foto))){
                \Storage::delete('public/'.$product->foto);
            }
            $file = $request->file('foto')->store('product','public');
            $product->foto = $file;
        };
        $product->save();
        return redirect('/dashboard/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/dashboard/products');    }
}
