<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);

Auth::routes();

// Route yang diproteksi oleh middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index'])->name('mobil');
    Route::get('/mobil_create', [App\Http\Controllers\MobilController::class, 'create'])->name('mobil-create');
    Route::post('/mobil_store', [App\Http\Controllers\MobilController::class, 'store'])->name('mobil-store');
    Route::put('/mobil_update/{id}', [App\Http\Controllers\MobilController::class, 'update'])->name('mobil-update');
    Route::delete('/mobil_destroy/{id}', [App\Http\Controllers\MobilController::class, 'destroy'])->name('mobil-destroy');

    // wisata
    Route::get('/wisata', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
    Route::get('/wisata_create', [App\Http\Controllers\WisataController::class, 'create'])->name('wisata-create');
    Route::post('/wisata_store', [App\Http\Controllers\WisataController::class, 'store'])->name('wisata-store');
    Route::put('/wisata_update/{id}', [App\Http\Controllers\WisataController::class, 'update'])->name('wisata-update');
    Route::delete('/wisata_destroy/{id}', [App\Http\Controllers\WisataController::class, 'destroy'])->name('wisata-destroy');

    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [HomeController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [HomeController::class, 'update'])->name('profile.update');

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('/contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
    Route::put('/contact/update/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contact/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');

    Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner');
    Route::post('/banner/store', [App\Http\Controllers\BannerController::class, 'store'])->name('banners.store');
    Route::put('/banner/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banners.update');
    Route::delete('/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.destroy');

    Route::post('/promo/store', [App\Http\Controllers\HomeController::class, 'Promostore'])->name('promo.store');
    Route::put('/promo/update/{id}', [App\Http\Controllers\HomeController::class, 'Promoupdate'])->name('promo.update');
    Route::delete('/promo/delete/{id}', [App\Http\Controllers\HomeController::class, 'Promodestroy'])->name('promo.destroy');
});
