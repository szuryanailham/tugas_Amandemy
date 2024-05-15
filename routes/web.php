<?php

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
    Route::get("/listProduct/{user_id}", [HomeController::class, 'show'])->name('listProduct');
    Route::get("/detailuser/{user_id}", [HomeController::class, 'detailUser']);
    Route::resource('/listProduct/EditProduct', editProductController::class);
Route::get('/home', [HomeController::class, 'Allproduct'])->name('listProduct');
    Route::get('/tambah', function () {
        return view('welcome');
    });
    // LOGOUT ROUTER
Route::get('/logout',[loginController::class,'logout']);
});

// ROUTE  LOGIN
Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'authenticate']);



// ROUTE SIGN UP
Route::get('/signUp',[RegisterController::class,'index'])->middleware('guest');
Route::post('/signUp',[RegisterController::class,'store']);

Route::resource('/member', UserController::class)->middleware('admin');



