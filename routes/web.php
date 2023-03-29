<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolioConroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('portfolio')->name('portfolio.')->group(function() {
    Route::get('/', [portfolioConroller::class, 'index'])->name('index');
    Route::get('/about', [portfolioConroller::class, 'about'])->name('about');
    Route::get('/contact', [portfolioConroller::class, 'contact'])->name('contact');
    Route::post('/contact', [portfolioConroller::class, 'contactForm'])->name('contactForm');
    Route::get('/portfolio', [portfolioConroller::class, 'portfolio'])->name('portfolio');
});
