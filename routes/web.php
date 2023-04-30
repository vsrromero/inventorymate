<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AppHomeController;
use Illuminate\Support\Facades\Route;

// routes for public area (no login required)

// get
Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('/about', [AboutController::class, 'about'])->name('web.about');
Route::get('/contact', [ContactController::class, 'contact'])->name('web.contact');
Route::get('/login', [AuthenticationController::class, 'login'] )->name('web.login');

// post
Route::post('/contact', [ContactController::class, 'store'])->name('web.contact');
Route::post('/login', [AuthenticationController::class, 'authenticate'] )->name('web.login');


// restricted area (login required)
Route::prefix('app')->middleware('authentication')->group(function(){
    Route::get('/home', [AppHomeController::class, 'index'])->name('app.home');
    Route::get('/customer', [CustomerController::class, 'index'])->name('app.customer');

    Route::get('/supplier', [SupplierController::class, 'index'])->name('app.supplier');
    Route::get('/supplier/list', [SupplierController::class, 'list'])->name('app.supplier.list');
    Route::get('/supplier/new', [SupplierController::class, 'new'])->name('app.supplier.new');
    Route::post('/supplier/new', [SupplierController::class, 'store'])->name('app.supplier.new');
    Route::delete('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('app.supplier.delete');
    Route::put('/supplier/update/{id}', [SupplierController::class, 'update'])->name('app.supplier.update');

    Route::get('/product', [ProductController::class, 'index'])->name('app.product');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('app.logout');

});