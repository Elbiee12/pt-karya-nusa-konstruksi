<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Halaman Utama Publik & Formulir
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/rfq', [HomeController::class, 'storeRfq'])->name('rfq.store');
Route::post('/booking', [HomeController::class, 'storeBooking'])->name('booking.store');

// Route Auth Admin
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard Admin (Terproteksi & Sinkron)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // RFQ Management
    Route::get('/admin/rfq', [AdminController::class, 'rfqIndex'])->name('admin.rfq');
    Route::delete('/admin/rfq/{id}', [AdminController::class, 'destroyRfq'])->name('admin.rfq.destroy');

    // Booking Konsultasi Management
    Route::get('/admin/bookings', [AdminController::class, 'bookingsIndex'])->name('admin.bookings');
    Route::delete('/admin/bookings/{id}', [AdminController::class, 'destroyBooking'])->name('admin.bookings.destroy');

    // Projects Management
    Route::get('/admin/projects', [AdminController::class, 'projectsIndex'])->name('admin.projects');
    Route::post('/admin/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::delete('/admin/projects/{id}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy');
});