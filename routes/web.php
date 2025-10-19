<?php

use App\Http\Controllers\Pages\AboutUsPageController;
use App\Http\Controllers\Pages\BlogPageController;
use App\Http\Controllers\Pages\ContactPageController;
use App\Http\Controllers\Pages\DonatePageController;
use App\Http\Controllers\Pages\GalleryPageController;
use App\Http\Controllers\Pages\HomePageController;
use App\Http\Controllers\Pages\ProgramsPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomePageController::class)->name('home');
Route::get('/about-us', AboutUsPageController::class)->name('about-us');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Route::post('/contact', [ContactPageController::class, 'store'])->name('contact.store');
Route::get('/gallery', [GalleryPageController::class, 'index'])->name('gallery.index');
Route::get('/gallery/albums/{album}', [GalleryPageController::class, 'album'])->name('gallery.album');

Route::get('/programs', ProgramsPageController::class)->name('programs');
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogPageController::class, 'read'])->name('blog');
Route::get('/donate', DonatePageController::class)->name('donate');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
// require __DIR__ . '/admin.php';
