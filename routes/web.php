<?php

use App\Http\Controllers\editProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/AllproductCard', [HomeController::class, 'Allproduct'])->name('listProduct');

Route::get('/listProduct', [HomeController::class, 'show'])->name('listProduct');
Route::resource('/EditProduct',editProductController::class);



