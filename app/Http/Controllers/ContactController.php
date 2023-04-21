<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('web.contact', $this->styles());
    }

    private function styles()
    {
        return [
            //title of the page
            'title' => 'Inventory Mate - Contact',
            //css classes for common components
            'class_board' => 'black-board',
            'class_text_area' => 'form-text-area'
        ];
    }
}
