<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    
    {   
        $supplierNames = array(
            "Arctic Trading Co.",
            "Frosty Supply Co.",
            "Chillax Corp.",
            "Iceberg Industries",
            "Snowy Peaks Distribution",
            "Glacier Goods Ltd.",
            "Polar Products Inc.",
            "Winter Wonderland Enterprises",
            "Icy Imports Co.",
            "Frozen Foods Co."
        );
        
        return view('app.supplier.index', compact('supplierNames'));
    }
}
