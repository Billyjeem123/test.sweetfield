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

Route::view('/admin/login', 'admin.login')->name('admin.login');
Route::post('/login_admin', [AdminController::class, 'login'])->name('login_admin');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::view('/about', 'home.about')->name('about');
Route::get('/menu', [HomeController::class, 'food_menu'])->name('food_menu');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::view('/contact', 'home.contact')->name('contact');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('addToCart');
Route::delete('/remove-from-cart/{id}', [HomeController::class, 'removeFromCart'])->name('removeFromCart');
Route::view('/login', 'home.login')->name('login');
Route::view('/register', 'home.registration')->name('register');
Route::post('/user/login', [HomeController::class, 'loginUser'])->name('userLogin');
Route::post('/register', [HomeController::class, 'register'])->name('register');
Route::post('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/update-quantity/{id}', [HomeController::class, 'updateQuantity'])->name('updateQuantity');
Route::get('/cart-count', [HomeController::class, 'cartCount'])->name('cart.count');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/testimonial', [HomeController::class, 'save_testimonial'])->name('testimonial.store');
Route::post('/contact', [HomeController::class, 'save_contacts'])->name('contact.store');
Route::post('/special-order', [HomeController::class, 'save_special_order'])->name('special-order.store');

Route::prefix('admin')->middleware('admin.auth')->group(function () {

    // Define your admin routes here
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/menu', [AdminController::class, 'menu'])->name('menu');
    Route::get('/edit_menu/{id}', [AdminController::class, 'edit_menu'])->name('edit_menu');
    Route::post('/update_menu/{id}', [AdminController::class, 'update_menu'])->name('update_menu');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('testimonials');

    Route::get('/advert', [AdminController::class, 'advert'])->name('advert');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::post('/register', [AdminController::class, 'registerAdmin'])->name('admin.register');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::post('/menu/upload', [AdminController::class, 'uploadMenu'])->name('menu.upload');
    Route::delete('/menu/delete/{id}', [AdminController::class, 'deleteMenu'])->name('menu.delete');
    Route::get('/menu/view-image/{id}', [AdminController::class, 'viewImage'])->name('menu.viewImage');
    Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('testimonials');
    Route::post('/testimonials/{id}/reject', [AdminController::class, 'reject'])->name('admin.testimonials.reject');
    Route::post('/testimonials/{id}/approve', [AdminController::class, 'approve'])->name('admin.testimonials.approve');
    Route::get('/message', [AdminController::class, 'messages'])->name('messages');
    Route::delete('/message/{id}', [AdminController::class, 'delete_contact_messages'])->name('messages.destroy');
    // Add more routes as needed

});



