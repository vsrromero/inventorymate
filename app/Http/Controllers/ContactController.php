<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('web.contact', 
        //Parameters to be passed to the view
        [
            'title' => 'Inventory Mate - Contact',
            'class_board' => 'black-board',
            'class_text_area' => 'form-text-area'
        ]);
    }
}
