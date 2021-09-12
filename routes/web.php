<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

//Route for admin only
Route::middleware(['IsAdmin'])->name('admin.')->group(function ()
{
    Route::get('/products', [ProductController::class,'products'])->name('products');
    Route::get('/create-products', [ProductController::class,'create'])->name('createproducts');
    Route::post('/create-products', [ProductController::class,'store'])->name('storeproducts');
    Route::get('/update-product/{id}', [ProductController::class,'show'])->name('showproduct');
    Route::post('/updateproduct/{id}',[ProductController::class,'update'])->name('updateproduct');
    Route::get('/destroy/{id}', [ProductController::class,'destroy'])->name('destroyproduct');
    Route::post('/deleteproduct/{id}', [ProductController::class,'delete'])->name('deleteproduct');
});

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
