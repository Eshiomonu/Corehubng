<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;

// ------------------------------------
// Public Pages Routes
// ------------------------------------

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services Page
Route::get('/services', [ServicesController::class, 'index'])->name('services');

// Individual Service Pages
Route::get('/services/it-consultation', [ServicesController::class, 'itConsultation'])->name('services.it');
Route::get('/services/web-software', [ServicesController::class, 'webSoftware'])->name('services.web-software');
Route::get('/services/graphic-design', [ServicesController::class, 'graphicDesign'])->name('services.graphic-design');
Route::get('/services/electronics', [ServicesController::class, 'electronics'])->name('services.electronics');
Route::get('/services/logistics', [ServicesController::class, 'logistics'])->name('services.logistics');
Route::get('/services/education', [ServicesController::class, 'education'])->name('services.education');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog Page
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Additional Pages (Optional)
// e.g., FAQ, Terms, Privacy
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
