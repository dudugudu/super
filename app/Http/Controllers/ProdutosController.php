<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdutosController extends Controller
{
    //
    function show()
    {
        return "ok";
    }

    function create(Request $req)
    {
        $product  = new Product();
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->save();

        return redirect()->route('produtos');
    }

    function edit($id)
    {
        $product = Product::find($id);
        return view('produtos_edit', ['product' => $product]);
    }
    
}
