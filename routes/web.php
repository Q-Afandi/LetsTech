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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Dashboard Admin
Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::resource('/dashboard/user/', DashboardUserController::class);

Route::get('/dashboard/user/{user:id}/edit', [DashboardUserController::class, 'edit']);

Route::post('/dashboard/user/{user:id}/update', [DashboardUserController::class, 'update']);

Route::delete('/dashboard/user/{user:id}', [DashboardUserController::class, 'destroy']);

Route::get('/kategoris/{kategori:slug}', function(Kategori $kategori){
    return view('kategori', [
        'name' => "Post By Category : {$kategori->nama}",
        'active' => 'kategoris'
    ]);
});

Route::post('/dashboard/user/create', [DashboardUserController::class, 'store']);

Route::resource('/dashboard/product/', DashboardProductController::class);

// End Dashboard Admin

Route::get('/product', function () {
    return view('product');
});