<?php

use App\Http\Controllers\BalancerSheetsController;
use App\Http\Controllers\BalancerTransactionsController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
        
    Route::get('/', function () {
        return view('app/index');
    })->name('dashboard');

    Route::resource('/links', LinksController::class);
    Route::resource('/balancer-sheets', BalancerSheetsController::class);

    Route::get('/balancer-transactions/{balancerTransaction}', [BalancerSheetsController::class, 'edit'])->name('balancer-transactions.edit');
    Route::post('/balancer-sheets/{balancerSheet}/transactions', [BalancerTransactionsController::class, 'store'])->name('balancer-transactions.store');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});