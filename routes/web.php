<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;

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

// default (used to manage the authentication)
Auth::routes();
// admin
Route::get('/admin', [PostController::class, 'index'])->name('admin.posts')->middleware('is_admin');
Route::get('/posts/search', [HomeController::class, 'adminSearch'])->middleware('is_admin');

// crud (admin)
Route::resource('posts', PostController::class)->middleware('is_admin');

// user
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search']);
Route::get('/member/{post}', [HomeController::class, 'show'])->name('view');

// non-user
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/cari', [WelcomeController::class, 'cari']);
Route::get('/{post}', [WelcomeController::class, 'show'])->name('show');