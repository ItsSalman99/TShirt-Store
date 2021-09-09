<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/shop', [PagesController::class,'shop']);
Route::get('product/{id}', [PagesController::class,'product'])->name('productoverview');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::post('/cart/{id}', [CartController::class, 'addtoCart'])->name('addtoBag');
Route::post('/update-cart/{rowId}', [CartController::class,'updateCart'])->name('Cartupdate');
Route::get('/remove/{rowId}', [CartController::class,'delete'])->name('Cartremoved');
Route::get('/destroy', [CartController::class, 'destroy'])->name('cartDestroy');

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/products', [AdminController::class,'products'])->middleware('IsAdmin')->name('products');
Route::get('/create-products', [AdminController::class,'create'])->middleware('IsAdmin')->name('createproducts');
Route::post('/create-products', [AdminController::class,'store'])->middleware('IsAdmin')->name('storeproducts');
require __DIR__.'/auth.php';
