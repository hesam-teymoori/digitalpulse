<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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
    
Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts' , [PostController::class, 'store'])->name('posts.store');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');















