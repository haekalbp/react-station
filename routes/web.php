<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

// default (used to manage the authentication)
Auth::routes();

// front-page
Route::get('/', function () {
    return view('welcome');
});

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// search
Route::get('/search', [HomeController::class, 'search']);
Route::get('/posts/search', [HomeController::class, 'adminSearch'])->middleware('is_admin');

// crud (admin)
Route::resource('posts', PostController::class)->middleware('is_admin');