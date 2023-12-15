<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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

Route::get('/signin', [ViewController::class, 'showSignIn']);
Route::post('/signin', [AuthorizationController::class, 'SignIn']);
Route::get('/signup', [ViewController::class, 'showSignUp']);
Route::post('/signup', [AuthorizationController::class, 'SignUp']);

Route::get('/catalog/{category}', [ProductController::class, 'index']);
Route::get('/manage-product', [ViewController::class, "showManageProduct"]);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions-view', [TransactionController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthorizationController::class, 'Logout']);
});

Route::resource('/product', ProductController::class);
