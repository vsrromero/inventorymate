<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $create = 'product.create';
    private $search = 'product.search';

    /**
     * Display a search form.
     */
    public function searchForm()
    {
        return view('app.product.search', [
            'title' => 'Inventory Mate - Products',
            'create' => route($this->create),
            'search' => route($this->search),
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
            'create' => route($this->create),
            'search' => route($this->search),
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
            'create' => route($this->create),
            'search' => route($this->search),
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
        ProductRepository::validateFields($request);
        Product::create($request->all());
        return redirect()->route($this->create)->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('app.product.show', [
            'title' => "Inventory Mate - Products $product->name",
            'create' => route($this->create),
            'search' => route($this->search),
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $units = ProductRepository::getUnits();

        return view('app.product.edit', [
            'title' => "Inventory Mate - Products $product->name",
            'create' => route($this->create),
            'search' => route($this->search),
            'product' => $product,
            'units' => $units,
        ]);
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
        ProductRepository::validateFields($request);
        $product->update($request->all());
        return redirect()->route('product.show', [
            'product' => $product->id,
        ])->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
            
            ProductRepository::deleteProduct($product->id);
            return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
            
    }
}
