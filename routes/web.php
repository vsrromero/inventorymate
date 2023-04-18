<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('web.home');
Route::get('/about', [AboutController::class, 'about'])->name('web.about');
Route::get('/contact', [ContactController::class, 'contact'])->name('web.contact');
Route::get('/login', function(){return 'login';})->name('web.login');

// restricted area
Route::prefix('app')->group(function(){
    Route::get('/clients', function(){return 'clients';})->name('app.clients');
    Route::get('suppliers', function(){return 'suppliers';})->name('app.suppliers');
    Route::get('products', function(){return 'products';})->name('app.products');
});
