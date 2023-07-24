<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Middleware\UserRoleMiddleware;

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

Route::name('admin.')->middleware('role')->prefix('admin')->group(function() {
    // name berubah menjadi adminproducts 
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('transactions');
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/rewards', [AdminController::class, 'rewards'])->withoutMiddleware('role')->name('rewards');
    Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
    Route::get('/ebook', [AdminController::class, 'ebook'])->name('ebook');
});

Route::resource('/', LandingController::class);
Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');
Route::get('wishlist', [LandingController::class, 'wishlist'])->name('landing.wishlist');
Route::get('details/{slug}', [LandingController::class, 'details'])->name('landing.details');