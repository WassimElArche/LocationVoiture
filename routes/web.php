<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\voitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/voiture');
});

Route::get('/voiture', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin' , adminController::class);
});

Route::resource('/voiture' , voitureController::class)->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
