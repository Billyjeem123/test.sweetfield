<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('home.index');
//});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::view('/about', 'home.about')->name('about');
Route::get('/menu', [HomeController::class, 'food_menu'])->name('food_menu');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::view('/contact', 'home.contact')->name('contact');
