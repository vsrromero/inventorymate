<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppHomeController extends Controller
{
    public function index()
    {
        return view('app.home', [
            'title' => 'Inventory Mate - My Home'
        ]);
    }
}
