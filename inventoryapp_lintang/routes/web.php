<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

// Home
Route::get('/', [DashboardController::class, 'home'])
    ->name('home')
    ->middleware('auth');

// Biodata
Route::get('/post', [BiodataController::class, 'forminput'])->name('post');
Route::post('/welcome', [BiodataController::class, 'welcome']);


// =========================
// CRUD Publisher (AUTH)
// =========================
Route::middleware(['auth'])->group(function () {

    // CREATE
    Route::get('/publisher/create', [PublisherController::class, 'create']);
    Route::post('/publisher', [PublisherController::class, 'store']);

    // READ
    Route::get('/publisher', [PublisherController::class, 'index']);
    Route::get('/publisher/{id}', [PublisherController::class, 'show']);

    // UPDATE
    Route::get('/publisher/{id}/edit', [PublisherController::class, 'edit']);
    Route::put('/publisher/{id}', [PublisherController::class, 'update']);

    // DELETE
    Route::delete('/publisher/{id}', [PublisherController::class, 'destroy']);
});


// =========================
// CRUD BOOK
// =========================
Route::resource('/book', BookController::class);


// =========================
// AUTH (GUEST)
// =========================
Route::middleware(['guest'])->group(function () {

    // Register
    Route::get('/register', [AuthController::class, 'formregister']);
    Route::post('/register', [AuthController::class, 'register']);

    // Login
    Route::get('/login', [AuthController::class, 'formlogin']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});


// =========================
// LOGOUT
// =========================
Route::post('/logout', [AuthController::class, 'logout']);