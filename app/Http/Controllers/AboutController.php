<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('web.about', 
        //Parameters to be passed to the view
        [
            //title of the page
            'title' => 'Inventory Mate - About'
        ]);
    }
}
