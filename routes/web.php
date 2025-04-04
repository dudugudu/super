<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
use App\Models\Product;
use App\Models\Supplier;

Route::get('/', function () {
    return view('home');
});



Route::get('/fornecedores', function () {
    $suppliers = Supplier::all();
    return view('suppliers.show', compact('suppliers'));
})->name('suppliers.show');

Route::get('/fornecedores/create', function () {
    return view('suppliers.create');
})->name('screate.show');

Route::post('/fornecedores/create', 
    [SuppliersController::class, 'create']
)->name('suppliers.create');

Route::get('/fornecedores/edit/{id}', 
    [SuppliersController::class, 'edit']
)->name('suppliers.edit');

Route::post('/fornecedores/edit/{id}', 
    [SuppliersController::class, 'update']
)->name('suppliers.update');

Route::get('/fornecedores/delete/{id}', 
    [SuppliersController::class, 'delete']
)->name('suppliers.delete');






Route::get('/produtos', function(){
    $products = Product::all();
    return view('product.show',compact('products'));
})->name('products.show');

Route::get('/produtos/create', function(){
    return view('product.create');
})->name('pcreate.show');

Route::post('/produtos/create', 
    [ProductsController::class, 'create']
)->name('products.create');

Route::get('/produtos/edit/{id}', 
    [ProductsController::class, 'edit']
)->name('products.edit');

Route::post('/produtos/edit/{id}', 
    [ProductsController::class, 'update']
)->name('products.update');

Route::get('/produtos/delete/{id}', 
    [ProductsController::class, 'delete']
)->name('products.delete');