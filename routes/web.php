<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BookCodeController;
use App\Http\Controllers\DownloadedBookController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookCodeController::class, 'welcome'])->name('welcome');
Route::post('/download', [DownloadedBookController::class, 'store'])->name('cust.download');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); // DONE✅
Route::post('/register', [AuthController::class, 'register']); // DONE✅
Route::post('/login', [AuthController::class, 'login'])->name('login'); // DONE✅
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // DONE✅
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // DONE✅


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [BookController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/book-performance/{id}', [BookController::class, 'bookPerformance'])->name('books.performance');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');
    Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::get('/agents/performance', [AgentController::class, 'agentPerformance'])->name('agents.performance');
    Route::delete('/agents/{id}', [AgentController::class, 'destroy'])->name('agents.destroy');

    Route::post('/codes', [BookCodeController::class, 'store'])->name('codes.store');
    Route::get('/codes', [BookCodeController::class, 'index'])->name('codes.index');
    Route::delete('/codes/{id}', [BookCodeController::class, 'destroy'])->name('codes.destroy');

    Route::get('/downloaded-history', [DownloadedBookController::class, 'index'])->name('cust.downloaded');

});