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

//! routes for public area (no login required)

Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('/about', [AboutController::class, 'about'])->name('web.about');

//* login routes
Route::get('/login', [AuthenticationController::class, 'login'] )->name('web.login');
Route::post('/login', [AuthenticationController::class, 'authenticate'] )->name('web.login');

//* contact routes
Route::get('/contact', [ContactController::class, 'contact'])->name('web.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('web.contact');


//! restricted area (login required)
Route::prefix('app')->middleware('authentication')->group(function(){
    
    //* home route
    Route::get('/home', [AppHomeController::class, 'index'])->name('app.home');
    
    //* customer routes
    Route::get('/customer', [CustomerController::class, 'index'])->name('app.customer');
    
    //* supplier routes
    Route::get('/supplier', [SupplierController::class, 'index'])->name('app.supplier');
    Route::get('/supplier/list', [SupplierController::class, 'list'])->name('app.supplier.list');
    Route::get('/supplier/new', [SupplierController::class, 'new'])->name('app.supplier.new');
    Route::post('/supplier/new', [SupplierController::class, 'store'])->name('app.supplier.new');
    Route::put('/supplier/update/{id}', [SupplierController::class, 'update'])->name('app.supplier.update');
    Route::delete('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('app.supplier.delete');
    
    //* product routes
    Route::get('/product/search', [ProductController::class, 'searchForm'])->name('product.search');
    Route::resource('product', ProductController::class);


    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('app.logout');

});