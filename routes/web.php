<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/testes', function () {
    return view('testes');
})->name('testes');

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

require __DIR__.'/auth.php';
