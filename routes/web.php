<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/testes', function () {
    return view('testes');
})->name('testes.index');

Route::post('/testes-edit', [ProfileController::class, 'testesUpgrade'])->middleware(['auth', 'verified'])->name('testes.edit');


Route::get('/why-kino', function () {
    return view('whykino');
})->name('whykino');

Route::get('/sobre', function () {
    return view('about');
})->name('aboutus');

Route::get('/explorar', function () {
    return view('explore');
})->name('explore');

Route::get('/parcerias', function () {
    return view('partners');
})->name('partners');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/company-profile', function () {
    return view('companyProfile');
})->middleware(['auth', 'verified'])->name('companyProfile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Route::get('/perfil', function () {
    return view('customerProfile');
})->middleware(['auth', 'verified'])->name('customerProfile');
 */

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [CustomerController::class, 'show'])->name('customerProfile');
    Route::get('/perfil-edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/perfil-edit', [CustomerController::class, 'store'])->name('customer.edit');
    Route::patch('/perfil-edit', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/perfil-delete', [CustomerController::class, 'destroy'])->name('customer.destroy');
});

require __DIR__.'/auth.php';
