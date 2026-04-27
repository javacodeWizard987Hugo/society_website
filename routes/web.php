<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FrontendController;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/events', [FrontendController::class, 'events'])->name('events');
Route::get('/donations', [FrontendController::class, 'donations'])->name('donations');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/team', [FrontendController::class, 'team'])->name('team');

// Admin Routes
// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');

        Route::resource('events', App\Http\Controllers\Admin\EventController::class)->names('admin.events');
        Route::resource('achievements', App\Http\Controllers\Admin\AchievementController::class)->names('admin.achievements');
        Route::resource('donations', App\Http\Controllers\Admin\DonationController::class)->names('admin.donations');
        Route::resource('future-projects', App\Http\Controllers\Admin\FutureProjectController::class)->names('admin.future-projects');
        Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class)->names('admin.gallery')->except(['edit', 'update', 'show']);
    });
});
