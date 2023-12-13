<?php

use App\Http\Controllers\AuthorizationController;
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
Route::post('/logout', [AuthorizationController::class, 'Logout']);
Route::get('/catalog/{category}', [ProductController::class, 'index']);

Route::resource('/product', ProductController::class);


Route::middleware('auth')->group(function () {
});
