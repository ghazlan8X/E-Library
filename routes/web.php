<?php

use App\Livewire\Books;
use App\Livewire\CreateBooks;
use App\Livewire\Dashboard;
use App\Livewire\DetailBooks;
use App\Livewire\EditBooks;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Dashboard::class)->name('dashboard');

Route::get('/books', Books::class)->name('books');

// create product
Route::get('/books/create', CreateBooks::class)->name('books.create');

// edit product
Route::get('/books/edit/{id}', EditBooks::class)->name('books.edit');

// detail product
Route::get('/books/detail/{id}', DetailBooks::class)->name('books.detail');