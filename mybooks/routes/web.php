<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

// الصفحات العامة
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});
//
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');});

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index')->middleware('auth');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store')->middleware('auth');



Route::get('/books', [BookController::class, 'index'])->name('books.index'); // عرض جميع الكتب
Route::get('/books/show', [BookController::class, 'show'])->name('books.show'); // عرض جميع الكتب
Route::get('/books/create', [BookController::class, 'create'])->name('books.create'); // عرض جميع الكتب
Route::post('/books', [BookController::class, 'store'])->name('books.store'); // عرض جميع الكتب
Route::get('/edit/{book}', [BookController::class, 'edit'])->name('books.edit'); // Edit book
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy'); // Edit book

//// Admin routes for users

Route::get('/users', [UserController::class, 'index'])->name('users.index'); // عرض جميع الكتب
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Form to add new user
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Store new user
 Route::get('/edit{user}', [UserController::class, 'edit'])->name('users.edit'); // Edit user
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update'); // Update user
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // Delete user
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show'); // View single user
require __DIR__.'/auth.php';
