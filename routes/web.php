<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BookController;

Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create')->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->name('books.store')->middleware('auth');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update')->middleware('auth');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
