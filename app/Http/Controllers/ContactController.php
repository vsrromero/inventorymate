<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactOption;
use Illuminate\Http\Request;
use App\Models\WebContact;
use App\Repositories\ContactOptionRepository;

class ContactController extends Controller
{

    private $styles;
    private $contactOptionRepository;

    public function __construct(ContactOptionRepository $contactOptionRepository)
    {
        $this->styles = [
            //css classes for common components
            'class_border' => 'black-border',
            'class_text_area' => 'form-text-area'
        ];

        $this->contactOptionRepository = $contactOptionRepository;
    }

    public function contact()
    {
        $options = $this->contactOptionRepository->getOptions();

        return view('web.contact', [
            'styles' => $this->styles, 
            'options' => $options,
            'title' => 'Inventory Mate - Contact'
        ]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|min:5|max:80',
                'subject' => 'required',
                'phone' => 'required|max:20|numeric',
                'message' => 'required|min:10|max: 2000'
            ],
    );

        //persist data to database

        WebContact::create($request->all());

        //redirect to the same page

        return redirect()->route('web.contact')->with('success', 'Thanks for contacting us! - wait till 48 hours for a response');

    }
}
