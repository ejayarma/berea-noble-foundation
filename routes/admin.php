<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Settings\TwoFactorAuthenticationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix('admin')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('contact', [ContactController::class, 'index'])->name('admin.contact.index');

    // Admin Routes (protected by auth middleware)
    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

        // Album Management
        Route::resource('albums', AlbumController::class);
        Route::post('albums/reorder', [AlbumController::class, 'reorder'])->name('albums.reorder');

        // Photo Management
        Route::post('albums/{album}/photos', [PhotoController::class, 'store'])->name('albums.photos.store');
        Route::put('photos/{photo}', [PhotoController::class, 'update'])->name('photos.update');
        Route::delete('photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
        Route::post('albums/{album}/photos/reorder', [PhotoController::class, 'reorder'])->name('albums.photos.reorder');
    });

    Route::middleware('auth')->group(function () {

        Route::get('kaka', [DashboardController::class, 'index'])->name('admin.index');
    });
});
