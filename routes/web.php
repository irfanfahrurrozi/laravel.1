<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckUser;
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

Route::get('/', [ProductController::class,'index'])->name('product.index');

Route::get ('/home/{name?}',[HomeController::class,'index'])->name('home.index');

Route::get('/user', [UserController::class,'index'])->name('user.index');

Route::get('/posts1',[ClientController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/posts1/{id}', [ClientController::class, 'getPostById'])->name('posts.getPostById');

Route::get('/add-post1', [ClientController::class, 'addPost'])->name('posts.addpost');

Route::get('/update-post1', [ClientController::class, 'updatePost'])->name('posts.update');

Route::get('/delete-post1/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.data');

Route::get('/session/set', [SessionController:: class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('posts.add');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('posts.addsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById']) ->name('post.getbyid');

Route::get('/delete-post/{id}', [PostController::class, 'deletePostById'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPostById']) -> name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePostById'])-> name('posts.update');

Route::get('inner-join', [PostController::class, 'innerJoinClause'])->name('post.innerjoin');

Route::get('left-join', [PostController::class, 'leftJoinClause'])->name('post.leftjoin');

Route::get('right-join', [PostController::class, 'rightJoinClause'])->name('post.rightjoin');

Route::get('/all-posts', [PostController::class, 'getAllPostsUsingModel'])->name('post.getallpostusingmodel');