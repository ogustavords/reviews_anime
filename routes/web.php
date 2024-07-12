<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/anime/{id}', [AnimeController::class, 'details'])->name('anime.details');
Route::get('/anime/{id}/review', [ReviewController::class, 'create'])->name('review.create');
Route::post('/anime/{id}/review', [ReviewController::class, 'store'])->name('review.store');

Route::get('/perfil', [ReviewController::class, 'index'])->name('perfil.show');
Route::get('/perfil/review/{id}/edit', [ReviewController::class, 'edit'])->name('review.edit');
Route::put('/perfil/review/{id}', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/perfil/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');