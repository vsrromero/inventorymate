<?php  

namespace App\Repositories;

use App\Models\Supplier;

class SuppliersRepository
{
    public static function getSuppliers()
    {
        $suppliers = Supplier::all();
        $suppliers = $suppliers->toArray();
        return $suppliers;
    }
}