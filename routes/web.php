<?php

use App\Http\Controllers\AuthorizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get('/catalog-men', [ViewController::class, 'showCatalogMen']);

Route::get('/signin', [ViewController::class, 'showSignIn']);
Route::post('/signin', [AuthorizationController::class, 'SignIn']);
Route::post('/signup', [AuthorizationController::class, 'SignUp']);
