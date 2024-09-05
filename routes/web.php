<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
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




    Route::get('/', function () {
        return view('welcome');
    });

Route::post('/auth',[UserController::class,'auth']);
Route::get('/user',[UserController::class,'user']);
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::get('/product',[UserController::class,'product']);
// Route::get('/checkout',[UserController::class,'checkout']);
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::get('/checkout/{id}',[UserController::class,'show']);
Route::post('/checkout/{id}',[CheckoutController::class,'store'])->name('checkout.store');
// Route::get('/checkout/confirmation',[CheckoutController::class, 'confirmation'])->name('checkout.confirmation');
Route::get('/berhasil',[UserController::class,'berhasil']);
Route::get('/sukses',[UserController::class,'sukses']);
Route::get('/logout',[UserController::class,'logout']);
