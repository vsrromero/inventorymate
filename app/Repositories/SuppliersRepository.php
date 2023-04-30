<?php  

namespace App\Repositories;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersRepository
{
    public static function getSuppliers(Request $request)
    {
        $supplier = Supplier::where('name', 'like', '%'.$request->input('name').'%')
        ->where('address', 'like', '%'.$request->input('address').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();
        
        return $supplier;
    }
}