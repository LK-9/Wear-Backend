<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



// Home/Welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Shop & Products
Route::get('/shop', [ProductController::class, 'productPage'])->name('shop');
Route::get('/shop-details', [ProductController::class, 'productDetails'])->name('shop-details');

// Blog
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('blog-details');

// Static Pages
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/faq', [WelcomeController::class, 'faq'])->name('faq');
Route::get('/404-error', [WelcomeController::class, 'error'])->name('404');

// Authenticated User Routes

Route::middleware('auth')->group(function () {
    // Dashboard
    // Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Shopping Cart
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');

    // Checkout
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/order/{id}/confirmation', [CheckoutController::class, 'confirmation'])->name('order.confirmation');
});

// Product search and filter
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

require __DIR__ . '/auth.php';
