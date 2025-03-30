<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    //

    function create(Request $req)
    {
        $supplier = new Supplier();
        $supplier->name = $req->input('name');
        $supplier->company_name = $req->input('company_name');
        $supplier->cnpj = $req->input('cnpj');
        $supplier->save();

        return redirect()->route('suppliers.show');
    }

    function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit', ['supplier' => $supplier]);
    }
    function update(Request $req, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $req->input('name');
        $supplier->company_name = $req->input('company_name');
        $supplier->cnpj = $req->input('cnpj');
        $supplier->save();

        return redirect()->route('suppliers.show');
    }
    function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('suppliers.show');
    }
}
