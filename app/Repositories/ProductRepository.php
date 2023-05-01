<?php  

namespace App\Repositories;

use App\Models\MeasurementUnit;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{
    public static function getProducts(Request $request)
    {
        $product = Product::where('name', 'like', '%'.$request->input('name').'%')
        ->where('description', 'like', '%'.$request->input('description').'%')
        ->where('stock', 'like', '%'.$request->input('stock').'%')
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