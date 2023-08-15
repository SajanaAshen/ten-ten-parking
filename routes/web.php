<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/terms-and-conditions', function () {
    return view('terms');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/details', function () {
    return view('details');
})->name('details');

Route::post('/basic-details', [App\Http\Controllers\QuoteController::class, 'basicDetails'])->name('basic-details');
Route::post('/book', [App\Http\Controllers\QuoteController::class, 'book'])->name('book');
