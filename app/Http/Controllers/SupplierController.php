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

    public function list()
    {
        return view('app.supplier.list', [
            'title' => 'Inventory Mate - Supplier',
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'postcode' => 'required|min:3|max:10',
            'city' => 'required',
            'county' => 'required',
        ]);

        if($request->input('_token') != ''){

            $supplier = new Supplier();
            $supplier = $supplier->create($request->all());

        }
        return redirect()->route('app.supplier.new');
    }

}