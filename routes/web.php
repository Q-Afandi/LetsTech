<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\UserController;
use App\Models\Kategori;


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

// Product
Route::get('/kategoris/{kategori:slug}', function(Kategori $kategori){
    return view('kategori', [
        'name' => "Post By Category : {$kategori->nama}",
        'active' => 'kategoris'
    ]);
});

Route::resource('/dashboard/product/', DashboardProductController::class);

Route::post('/dashboard/product/create', [DashboardProductController::class, 'store']);
Route::get('/dashboard/product/{product:id}/edit', [DashboardProductController::class, 'edit']);
Route::post('/dashboard/product/{product:id}/update', [DashboardProductController::class, 'update']);
Route::delete('/dashboard/product/{product:id}', [DashboardProductController::class, 'destroy']);
// End Dashboard Admin

Route::get('/product', function () {
    return view('product');
});