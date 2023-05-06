<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use App\Repositories\ProductRepository;
use App\Repositories\ProductDetailRepository;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    private $create = 'product-detail.create';
    private $search = 'product-detail.index';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_detail = ProductDetailRepository::getAllProductDetails(request());

        return view('app.product_detail.index', [
            'title' => 'Inventory Mate - Product Details',
            'create' => route($this->create),
            'search' => route($this->search),
            'product_detail' => $product_detail,
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

        return view('app.product_detail.create', [
            'title' => 'Inventory Mate - Create Product Detail',
            'units' => $units,
            'create' => route($this->create),
            'search' => route($this->search),
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
        ProductDetailRepository::validateFields($request);

        ProductDetail::create($request->all());
        return redirect()->route($this->create)->with('success', 'Product detail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\ProductDetail  $product_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $product_detail)
    {
        return view('app.product_detail.edit', [
            'title' => 'Inventory Mate - Edit Product Detail',
            'product_detail' => $product_detail,
            'units' => ProductRepository::getUnits(),
            'create' => route($this->create),
            'search' => route($this->search),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\ProductDetail  $product_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDetail $product_detail)
    {
        ProductDetailRepository::validateFields($request);
        $product_detail->update($request->all());
        return redirect()->route($this->create)->with('success', 'Product detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'destroy';
    }
}
