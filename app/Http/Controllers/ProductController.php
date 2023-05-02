<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a search form.
     */
    public function searchForm()
    {
        return view('app.product.search', [
            'title' => 'Inventory Mate - Products',
            'create' => route('product.create'),
            'search' => route('product.search'),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = ProductRepository::getProducts(request());

        return view('app.product.index', [
            'title' => 'Inventory Mate - Products',
            'create' => route('product.create'),
            'search' => route('product.search'),
            'products' => $products,
            'request' => $request->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = ProductRepository::getUnits();


        return view('app.product.create', [
            'title' => 'Inventory Mate - Products',
            'create' => route('product.create'),
            'search' => route('product.search'),
            'units' => $units,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = ProductRepository::validateFields($request);
        if ($validate->fails()) {
            return redirect()->route('product.create')->withErrors($validate)->withInput();
        }
        Product::create($request->all());
        return redirect()->route('product.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        echo 'destroy';
    }
}
