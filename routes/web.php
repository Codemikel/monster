<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::controller(ProductController::class)->group(function () {     
    Route::get('/',        'index')->name('index'); 
});

Route::controller(OrderController::class)->group(function () {     
    Route::get('/list',        'list')->name('list'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', ProductController::class)->except('show');

Route::resource('orders', OrderController::class)->except('show');

require __DIR__.'/auth.php';
