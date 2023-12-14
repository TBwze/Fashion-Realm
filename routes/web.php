<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ViewController::class, 'showHome']);
Route::get('/detail', [ViewController::class, 'showDetail']);

Route::get('/signin', [ViewController::class, 'showSignIn']);
Route::post('/signin', [AuthorizationController::class, 'SignIn']);
Route::get('/signup', [ViewController::class, 'showSignUp']);
Route::post('/signup', [AuthorizationController::class, 'SignUp']);

Route::get('/catalog/{category}', [ProductController::class, 'index']);

// Route to add a product to the cart
Route::post('/cart/add/{productId}/{size}', [CartController::class, 'store'])->name('cart.add');

// Route to display the cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route to update the cart (e.g., changing quantity)
Route::patch('/cart/{rowId}', [CartController::class, 'update'])->name('cart.update');

// Route to remove an item from the cart
Route::delete('/cart/{rowId}', [CartController::class, 'destroy'])->name('cart.remove');

// Route to clear the entire cart
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthorizationController::class, 'Logout']);
});

Route::resource('/product', ProductController::class);
Route::resource('/cart', CartController::class);
