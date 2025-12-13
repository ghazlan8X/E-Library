<?php

use App\Livewire\Books;
use App\Livewire\CreateBooks;
use App\Livewire\Dashboard;
use App\Livewire\DetailBooks;
use App\Livewire\EditBooks;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    // login
    Route::get('/login', Login::class)->name('login');

    // register
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('/', Dashboard::class)->name('dashboard');

    // detail product
    Route::get('/books/detail/{id}', DetailBooks::class)->name('books.detail');

    Route::middleware('admin')->group(function () {
        // create product
        Route::get('/books/create', CreateBooks::class)->name('books.create');
    
        // edit product
        Route::get('/books/edit/{id}', EditBooks::class)->name('books.edit');
    });
});

// Route::get('/books', Books::class)->name('books');