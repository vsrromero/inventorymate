<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home', $this->styles());
    }

    private function styles()
    {
        return [
            //title of the page
            'title' => 'Inventory Mate',
            //css classes for common components
            'class_board' => 'white-board',
            'class_text_area' => ''
        ];
    }
}
