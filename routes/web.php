<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('transaction', [TransactionController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('transaction');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/page', [PageController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('page');

Route::get('/page/{slug}', [PageController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('page.show');
