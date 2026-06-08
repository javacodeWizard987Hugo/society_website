<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FutureProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\FrontendController;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/events', [FrontendController::class, 'events'])->name('events');
Route::get('/donations', [FrontendController::class, 'donations'])->name('donations');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'submitContact'])->name('frontend.contact.submit');
Route::get('/services', function () {
    return view('frontend.services');
})->name('service');

Route::get('/team', [FrontendController::class, 'team'])->name('frontend.team');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('admin.settings.update');

        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

        Route::resource('events', EventController::class)->names('admin.events');
        Route::resource('achievements', AchievementController::class)->names('admin.achievements');
        Route::resource('donations', DonationController::class)->names('admin.donations');
        Route::resource('future-projects', FutureProjectController::class)->names('admin.future-projects');
        Route::resource('gallery', GalleryController::class)->names('admin.gallery')->except(['show']);
        Route::delete('gallery/image/{item}', [GalleryController::class, 'destroyImage'])->name('admin.gallery.image.destroy');
        Route::resource('slides', SlideController::class)->names('admin.slides');
        Route::resource('team', TeamMemberController::class)->names('admin.team');
        Route::resource('contacts', ContactController::class)->names('admin.contacts')->only(['index', 'show', 'destroy']);
    });
});
