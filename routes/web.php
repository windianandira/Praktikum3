<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

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
    return view('auth.login2');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user-profile', [DashboardController::class, 'profile']);
Route::get('/list-post', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::get('/edit-post', [PostController::class, 'edit']);

Route::get('/list-article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/add-article', [ArticleController::class, 'create'])->name('article.create');
Route::get('/store-article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/edit-article', [ArticleController::class, 'edit'])->name('article.edit');
Route::get('/update-article', [ArticleController::class, 'update'])->name('article.update');
Route::get('/delete-article', [ArticleController::class, 'destroy'])->name('article.destroy'); ; ;

Route::get('/user', [UserController::class, 'index']);
