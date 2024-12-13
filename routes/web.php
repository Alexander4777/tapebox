<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TapeController;
use App\Http\Controllers\TapeFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/app', [AppController::class, 'show'])->middleware(
    ['auth']
)->name('app');

Route::get('/tapeform', [TapeFormController::class, 'show'])->middleware(
    ['auth']
)->name('tapeform');

Route::post('/tapeform', [TapeFormController::class, 'handle_tape'])->middleware(
    ['auth']
)->name('tapeform');

Route::get('/tape/get/{id}', [TapeController::class, 'getTape']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
