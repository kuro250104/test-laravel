<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

use App\Http\Controllers\AuthorController;

use App\Http\Controllers\GenreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name("book.index");
Route::get('/books/create', [BookController::class, 'create'])->name("book.create");
Route::post('/books', [BookController::class, 'store'])->name("book.store");
Route::get('/books/{id}', [BookController::class, 'view'])->name("book.view");
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name("book.edit");
Route::put('/books/{id}/update', [BookController::class, 'update'])->name("book.update");
Route::delete('/books', [BookController::class, 'destroy'])->name("book.destroy");



Route::get('/authors', [AuthorController::class, 'index'])->name("author.index");
Route::get('/authors/create', [AuthorController::class, 'create'])->name("author.create");
Route::post('/authors', [AuthorController::class, 'store'])->name("author.store");
Route::get('/authors/{id}', [AuthorController::class, 'view'])->name("author.view");
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit'])->name("author.edit");
Route::put('/authors/{id}/update', [AuthorController::class, 'update'])->name("author.update");
Route::delete('/authors', [AuthorController::class, 'destroy'])->name("author.destroy");


Route::get('/genres', [GenreController::class, 'index'])->name("genre.index");
Route::get('/genres/create', [GenreController::class, 'create'])->name("genre.create");
Route::post('/genres', [GenreController::class, 'store'])->name("genre.store");
Route::get('/genres/{id}', [GenreController::class, 'view'])->name("genre.view");
Route::get('/genres/{id}/edit', [GenreController::class, 'edit'])->name("genre.edit");
Route::put('/genres/{id}/update', [GenreController::class, 'update'])->name("genre.update");
Route::delete('/genres', [GenreController::class, 'destroy'])->name("genre.destroy");