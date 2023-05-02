<?php

namespace App\Repositories;

use App\Models\MeasurementUnit;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{

    public static function validateFields(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:5|max:100|unique:products',
                'description' => 'required|max:300',
                'stock' => 'required|numeric',
                'measurement_unit_id' => 'required|numeric|exists:measurement_units,id',
            ],
            [
                'name.unique' => 'The product name is already registered.',
                'measurement_unit_id.required' => 'The measurement unit is required.',
                'measurement_unit_id.exists' => 'The measurement unit is invalid.',
            ]
        );

        return $request;
    }

    public static function getProducts(Request $request)
    {
        $product = Product::where('name', 'like', '%' . $request->input('name') . '%')
            ->where('description', 'like', '%' . $request->input('description') . '%')
            ->where('stock', 'like', '%' . $request->input('stock') . '%')
            ->orderBy('name')
            ->paginate(10);


        return $product;
    }

    public static function getUnits()
    {
        $units = MeasurementUnit::all()->toArray();
        return $units;
    }
}
