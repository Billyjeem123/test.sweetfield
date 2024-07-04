<?php

use App\Http\Controllers\AdminController;
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
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');


Route::prefix('admin')->group(function () {

    // Define your admin routes here
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/menu', [AdminController::class, 'menu'])->name('menu');
    Route::get('/edit_menu/{id}', [AdminController::class, 'edit_menu'])->name('edit_menu');
    Route::post('/update_menu/{id}', [AdminController::class, 'update_menu'])->name('update_menu');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('testimonials');
    Route::get('/messages', [AdminController::class, 'messages'])->name('messages');
    Route::get('/advert', [AdminController::class, 'advert'])->name('advert');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::post('/register', [AdminController::class, 'registerAdmin'])->name('admin.register');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::post('/menu/upload', [AdminController::class, 'uploadMenu'])->name('menu.upload');
    Route::delete('/menu/delete/{id}', [AdminController::class, 'deleteMenu'])->name('menu.delete');
    Route::get('/menu/view-image/{id}', [AdminController::class, 'viewImage'])->name('menu.viewImage');

    // Add more routes as needed

});



