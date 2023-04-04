<?php

use App\Http\Controllers\ProfileController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain('app.'. env('APP_URL'))->group(function() {
    require __DIR__.'/app.php';
    require __DIR__.'/auth.php';
})->name('app');

Route::get('/', function () {
    return view('home', [
        'experience' => Carbon::parse('04/01/2012')->diffInYears(),
    ]);
})->name('home');
