<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home',
        //Parameters to be passed to the view
        [
            //title of the page
            'title' => 'Inventory Mate',
            //classes for common components
            'class_board' => 'white-board',
            'class_text_area' => ''
        ]);
    }
    
}
