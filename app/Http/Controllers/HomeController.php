<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ContactOptionRepository;

class HomeController extends Controller
{
    private $styles;
    private $contactOptionRepository;

    public function __construct(ContactOptionRepository $contactOptionRepository)
    {
        $this->styles = [
            'title' => 'Inventory Mate',
            'class_board' => 'white-board',
            'class_text_area' => ''
        ];

        $this->contactOptionRepository = $contactOptionRepository;
    }

    public function index()
    {
        $options = $this->contactOptionRepository->getOptions();

        return view('web.home', [
            'styles' => $this->styles,
            'options' => $options
        ]);
    }
}
