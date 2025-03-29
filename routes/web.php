<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Models\Fornecedor;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
});

Route::get('/Fornecedores', function () {
    $fornecedores = Fornecedor::all();
    return view('fornecedores', compact('fornecedores'));
});

Route::get('/produtos', function(){
    $products = Product::all();
    return view('productos_show',compact('products'));
})->name('produtos');

Route::get('/produtos/create', function(){
    return view('produtos_create');
});

Route::post('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');

Route::get('/produtos/edit/{id}', [ProdutosController::class, 'edit'])->name('produtos.edit');