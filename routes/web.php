<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use Illuminate\Foundation\Application;
use app\Http\Controllers\IndexController;
use App\Http\Controllers\sliderControl;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dosen', [HomeController::class, 'dosen'])->name('dosen');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/admin', [AuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'store'])->middleware('auth');
Route::get('/listdosen', [AdminController::class, 'store'])->name('listdosen')->middleware('auth');
Route::get('/list', [AdminController::class, 'store'])->name('list')->middleware('auth');

Route::post('/file-upload', [sliderControl::class, 'upload'])->name('file.upload');
Route::get('/modal', [sliderControl::class, 'showModal'])->name('modal.show');
Route::delete('/file-delete/{id}', [sliderControl::class, 'delete'])->name('file.delete');

//Route::get('/', [IndexController::class, 'index']);

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});*/
