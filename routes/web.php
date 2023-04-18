<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('/about', [AboutController::class, 'about'])->name('web.about');
Route::get('/contact', [ContactController::class, 'contact'])->name('web.contact');
Route::get('/login', [LoginController::class, 'login'] )->name('web.login');

// restricted area
Route::prefix('app')->group(function(){
    Route::get('/clients', [ClientController::class, 'index'])->name('app.clients');
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('app.suppliers');
    Route::get('/products', [ProductController::class, 'index'])->name('app.products');
});
