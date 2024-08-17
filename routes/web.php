<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginGoolgeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Authorization
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', AdminMiddleware::class])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin
Route::resource('/Categories', CategoriesController::class);
Route::resource('/Post', PostController::class);

// client
Route::get('/', [IndexController::class, 'index'])->middleware(EnsureTokenIsValid::class)->name('Homepages');
Route::get('/danh-muc/{id}', [IndexController::class, 'category'])->name('Category');
Route::get('/bai-viet/{id}', [IndexController::class, 'post'])->middleware(EnsureTokenIsValid::class)->name('Post');
Route::get('/gioi-thieu', [IndexController::class, 'about'])->name('About');
Route::get('/lien-he', [IndexController::class, 'contact'])->name('Contact');

// login with google
Route::get('auth/google', [LoginGoolgeController::class, 'redirectToGoogle'])->name('login-by-google');
Route::get('auth/google/callback', [LoginGoolgeController::class, 'handleGoogleCallback']);




