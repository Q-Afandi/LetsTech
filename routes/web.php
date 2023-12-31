<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardKategoriController;


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
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Google Auth
Route::get('/auth/google',[App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login')->middleware('guest');
Route::get('/auth/goggle/callback/',[App\Http\Controllers\GoogleController::class, 'handleGoogleCallBack'])->name('google.callback')->middleware('guest');




// Dashboard Admin
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// USER
Route::resource('/dashboard/user/', DashboardUserController::class);
Route::get('/dashboard/user/{user:id}/edit', [DashboardUserController::class, 'edit']);
Route::post('/dashboard/user/{user:id}/update', [DashboardUserController::class, 'update']);
Route::delete('/dashboard/user/{user:id}', [DashboardUserController::class, 'destroy']);
Route::post('/dashboard/user/create', [DashboardUserController::class, 'store']);

// Product admin
Route::get('/kategoris/{kategori:id}', function(Kategori $kategori){
    return view('kategori', [
        'name' => "Product By Category : {$kategori->name}",
        'active' => 'kategoris'
    ]);
});

Route::resource('/dashboard/product/', DashboardProductController::class);

Route::post('/dashboard/product/create', [DashboardProductController::class, 'store']);
Route::get('/dashboard/product/{product:id}/edit', [DashboardProductController::class, 'edit']);
Route::post('/dashboard/product/{product:id}/update', [DashboardProductController::class, 'update']);
Route::delete('/dashboard/product/{product:id}', [DashboardProductController::class, 'destroy']);
Route::get('/dashboard/product/cetak', [DashboardProductController::class, 'cetak']);

// Kategori
Route::resource('/dashboard/kategori/', DashboardKategoriController::class);

Route::post('/dashboard/kategori/create', [DashboardKategoriController::class, 'store']);
Route::get('/dashboard/kategori/{kategori:id}/edit', [DashboardKategoriController::class, 'edit']);
Route::post('/dashboard/kategori/{kategori:id}/update', [DashboardKategoriController::class, 'update']);
Route::delete('/dashboard/kategori/{kategori:id}', [DashboardKategoriController::class, 'destroy']);
Route::get('/dashboard/kategori/cetak', [DashboardKategoriController::class, 'cetak']);

// End Dashboard Admin

Route::get('/product', function () {
    return view('product');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/about', function () {
    return view('about');
});

// Product Routes
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product:slug}' ,[ProductController::class,'show']);

// User Routes
Route::get('/partials/navbar', [UserController::class, 'index']);
Route::get('/partials/navbar/{user:slug}' ,[UserController::class,'show']);
