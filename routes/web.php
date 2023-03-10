<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Middleware\isAdmin;

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

Route::get('/shop', ShopComponent::class)->name('shop');
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);
Route::get('/', HomeComponent::class)->name('home');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/index', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

});

Route::middleware('auth')->group(function () {
        Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
        Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
        Route::get('/cart', CartComponent::class)->name('cart.index');
});
// Route::get('/admin')->group(function()
// {
//     Route::get('/index', [UserController::class,'index'])->name('users.index')->can('admin');
// });  
Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
        Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
require __DIR__ . '/auth.php';