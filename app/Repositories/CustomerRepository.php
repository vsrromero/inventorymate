<?php  

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerRepository
{
    public static function getCustomer(Request $request)
    {
        $customer = Customer::where('name', 'like', '%'.$request->input('name').'%')
        ->where('address', 'like', '%'.$request->input('address').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();
        
        return $customer;
    }
}