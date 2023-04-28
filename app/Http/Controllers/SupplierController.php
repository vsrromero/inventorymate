<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\SuppliersRepository;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    private $suppliersRepository;

    public function __construct(SuppliersRepository $suppliersRepository)
    {
        $this->suppliersRepository = $suppliersRepository;
    }

    public function index()
    
    {   
        $supplierNames = $this->suppliersRepository->getSuppliers();
        return view('app.supplier.index', compact('supplierNames'));
    }
}
