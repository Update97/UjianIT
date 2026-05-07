<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth', 'no-cache'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('index');
    Route::prefix('produk')->group(function () {    
        Route::get('/', [ProdukController::class, 'index'])->name('index');
        Route::get('/create', [ProdukController::class, 'create'])->name('create');
        Route::post('/', [ProdukController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [ProdukController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
        Route::delete('/{id}', [ProdukController::class, 'destroy'])->name('destroy');
    });
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
