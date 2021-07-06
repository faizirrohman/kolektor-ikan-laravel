<?php

use App\Http\Controllers\{CustomAuthController, DashboardController, JenisIkanController, PembelianController, PenjualController, ProfileController};
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

Route::get('/okkk', function () {
    return view('admin.profile.index');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/jenis-ikan')->name('jenis-ikan.')->group(function () {
        Route::get('/index', [JenisIkanController::class, 'index'])->name('index');
        Route::get('/create', [JenisIkanController::class, 'create'])->name('create');
        Route::post('/store', [JenisIkanController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [JenisIkanController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [JenisIkanController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [JenisIkanController::class, 'destroy'])->name('destroy');
        Route::get('/print-all', [JenisIkanController::class, 'printAll'])->name('printAll');
    });

    Route::prefix('/data-penjual')->name('data-penjual.')->group(function () {
        Route::get('/index', [PenjualController::class, 'index'])->name('index');
        Route::get('/create', [PenjualController::class, 'create'])->name('create');
        Route::post('/store', [PenjualController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PenjualController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PenjualController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PenjualController::class, 'destroy'])->name('destroy');
        Route::get('/print-all', [PenjualController::class, 'printAll'])->name('printAll');
    });

    Route::prefix('/data-pembelian')->name('data-pembelian.')->group(function () {
        Route::get('/index', [PembelianController::class, 'index'])->name('index');
        Route::get('/create', [PembelianController::class, 'create'])->name('create');
        Route::post('/store', [PembelianController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PembelianController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PembelianController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PembelianController::class, 'destroy'])->name('destroy');
        Route::get('/print-all', [PembelianController::class, 'printAll'])->name('printAll');
    });

    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/index', [ProfileController::class, 'index'])->name('index');
    });
});