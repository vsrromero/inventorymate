<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Repositories\SuppliersRepository;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()

    {
        return view('app.supplier.index', [
            'title' => 'Inventory Mate - Supplier',
        ]);
    }

    public function list(Request $request)
    {
        $suppliers = SuppliersRepository::getSuppliers(request());

        return view('app.supplier.list', [
            'title' => 'Inventory Mate - Supplier',
            'suppliers' => $suppliers,
            'request' => $request->all(),
        ]);
    }

    public function new()
    {
        return view('app.supplier.new', [
            'title' => 'Inventory Mate - Supplier',
        ]);
    }

    public function store(Request $request)
    {
        //validate the form
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'postcode' => 'required|min:3|max:10',
            'city' => 'required',
            'county' => 'required',
        ]);

        // create new supplier
        if ($request->input('_token') != '' && $request->input('id') == '') {

            $supplier = new Supplier();
            $supplier = $supplier->create($request->all());
        }

        // update existing supplier
        if ($request->input('_token') != '' && $request->input('id') != '') {

            $supplier = Supplier::find($request->input('id'));
            $supplier->update($request->all());
        }


        return redirect()->route('app.supplier.new')->with('success', 'Supplier saved.');
    }

    public function delete($id, Request $request)
    {
        if ($request->input('_token') != '') {

            $supplier = Supplier::find($id);
            $supplier->delete();
            return redirect()->route('app.supplier.list')->with('success', 'Supplier deleted.');
        }
    }

    public function update($id, Request $request)
    {

        $supplier = Supplier::find($id);

        return view(
            'app.supplier.new',
            [
                'supplier' => $supplier,
            ]
        );
    }
}
