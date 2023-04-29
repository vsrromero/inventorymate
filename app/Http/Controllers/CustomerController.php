<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('app.customer.index
        ', [
            'title' => 'Inventory Mate - Customer'
        ]);
    }
}
