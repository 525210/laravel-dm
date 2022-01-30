<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

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

//Route::get('/', function () {
//    return view('pet-shop.index');
//});

Route::get('/', [\App\Http\Controllers\ProductController::class, 'shopIndex'])->name('home');
Route::get('shop', [\App\Http\Controllers\ProductController::class, 'shopList'])->name('pet-shop/shop-page');
Route::get('about', [\App\Http\Controllers\ProductController::class, 'about'])->name('pet-shop/about-us');
Route::get('contact', [\App\Http\Controllers\ProductController::class, 'contact'])->name('pet-shop/contact');
Route::get('add-cart', [\App\Http\Controllers\ProductController::class, 'addCart'])->name('pet-shop/add-cart');
Route::get('product-details', [\App\Http\Controllers\ProductController::class, 'productDetails'])->name('pet-shop/product-details');
Route::get('checkout', [\App\Http\Controllers\ProductController::class, 'checkOut'])->name('pet-shop/checkout')->middleware('auth');
Route::get('my-account', [\App\Http\Controllers\ProductController::class, 'myAccount'])->name('pet-shop/my-account')->middleware('auth');
Route::post('make-order', [\App\Http\Controllers\ProductController::class, 'makeOrder'])->name('pet-shop/make-order')->middleware('auth');




Route::get('stas', [\App\Http\Controllers\StasController::class, 'stas'])->name('stas');

//Route::get('pet-shop/shop-page', function () {
//    return view('pet-shop/shop-page');
//})->name('pet-shop/shop-page');


//Route::get('pet-shop/main', function () {
//    return view('pet-shop/index');
//})->name('pet-shop/main');

//Route::get('pet-shop/about', [\App\Http\Controllers\PetController::class, 'about'])->name('pet-shop/about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
