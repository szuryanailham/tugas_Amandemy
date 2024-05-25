<?php

use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\editProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', function(){
    return view("index");
});

Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'authenticate']);

Route::middleware(['auth'])->group(function () {
    Route::get("/products", [HomeController::class, 'show'])->name('listProduct');
    Route::get("/checkout/{kode_barang}", [HomeController::class, 'checkout']);
    Route::get("/detail/{kode_barang}", [HomeController::class, 'detail']);
    Route::resource('/listProduct/EditProduct', editProductController::class);
    Route::get('/home', [HomeController::class, 'Allproduct'])->name('listProduct');
    // Route::get('/tambah', function () {
    //     return view('welcome');
    // });
    // LOGOUT ROUTER
Route::get('/logout',[loginController::class,'logout']);
});

// ROUTE  LOGIN
Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'authenticate']);



// ROUTE SIGN UP\
Route::resource('/edit-product', editProductController::class)->middleware('admin')->names('edit');


Route::get('google', function () {
    return view('googleAuth');
});
