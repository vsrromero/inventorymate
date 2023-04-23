<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebContact;

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

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:80',
            'subject' => 'required',
            'phone' => 'required|max:20',
            'message' => 'required|max: 2000'
        ]);

        //persist data on form after validation in case of error (see contact.blade.php)

        $request->flash();
        



        $contact = new WebContact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ]);
        $contact->save();
        return back()->with('success', 'Thanks for contacting us!');
    }
}
