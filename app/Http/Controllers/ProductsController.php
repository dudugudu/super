<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    function create(Request $req)
    {
        $product  = new Product();
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->save();

        return redirect()->route('products.show');
    }

    function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }
    function update(Request $req, $id)
    {
        $product = Product::find($id);
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->save();

        return redirect()->route('products.show');
    }
    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.show');
    }
   
}
