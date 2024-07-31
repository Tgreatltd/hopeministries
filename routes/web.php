<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('admin', 'admin')->name('admin');

Route::get('/admin', function () {
    return view('admin');
});

Route::view('prayers', 'prayersAdmin')->name('prayers');
Route::view('prayerPoint', 'prayerpoint')->name('prayerPoint');
Route::view('galleryAd', 'galleryAdmin')->name('ga');
Route::view('gallery', 'gallery')->name('gallery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
