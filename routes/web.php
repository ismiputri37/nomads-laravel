<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'] )->name('home');
Route::get('/detail', [DetailController::class, 'index'] )->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'] )->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'] )->name('checkout-success');




Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});