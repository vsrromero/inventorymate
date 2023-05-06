<?php

namespace App\Repositories;

use App\Models\ProductDetail;
use Illuminate\Http\Request;



class ProductDetailRepository
{

    public static function validateFields(Request $request,)
    {
        $request->validate(
            [
                'product_id' => 'required|numeric|exists:products,id',
                'weight' => 'required|numeric',
                'height' => 'required|numeric',
                'width' => 'required|numeric',
                'depth' => 'required|numeric',
                'measurement_unit_id' => 'required|numeric|exists:measurement_units,id',

            ],
            [

            ]
        );

        return $request;
    }

    public static function getAllProductDetails(Request $request)
    {
        $product_detail = ProductDetail::all()
            ->paginate(10);


        return $product_detail;
    }
}