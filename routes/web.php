<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/post', [PostController::class, 'index'])->name('Post');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('/post/create', [PostController::class, 'store']);
Route::get('/post/{post}/edit', [PostController::class, 'edit']);
Route::put('/post/{post}', [PostController::class, 'update']);
