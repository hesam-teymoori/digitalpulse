<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminCategoryController;
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
    //بخش کاربر خواننده
Route::get('/', [HomeController::class, 'index'] );

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');










   //بخش کاربر ادمین
Route::get('/admin/dashboard', [AdminCategoryController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');

Route::post('/admin/posts' , [AdminPostController::class, 'store'])->name('admin.posts.store');

Route::get('/admin/categories/{id}', [AdminCategoryController::class, 'show'])->name('admin.categories.show');

Route::get('/admin/posts/{id}', [AdminPostController::class, 'show'])->name('admin.posts.show');

Route::get('/admin/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');

Route::put('/admin/posts/{id}', [AdminPostController::class, 'update'])->name('admin.posts.update');

Route::delete('/admin/posts/{id}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');