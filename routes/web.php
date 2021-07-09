<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::post('/posts', [PostsController::class, 'createNewPost']);
Route::get('/posts/{param}', [PostsController::class, 'singlePost']);

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'registerPage'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/posts/comment/{param}', [CommentsController::class, 'createNewComment']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('pages.home');
});

