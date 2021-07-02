<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;

use App\Http\Controllers\AlpukatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TaliwangController;
use App\Http\Controllers\CirengController;
use App\Http\Controllers\DalgonaController;
use App\Http\Controllers\OndeController;
use App\Http\Controllers\SaljuController;
use App\Http\Controllers\SotoController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/recipe', function () {
//     return view('recipe');
// });

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/ayamBakarTaliwang', function () {
    return view('ayamBakarTaliwang');
});

Route::get('/ondeOndePelangi', function () {
    return view('ondeOndePelangi');
});

Route::get('/putriSalju', function () {
    return view('salju');
});

Route::get('/sotoBanjar', function () {
    return view('soto');
});

Route::get('/dalgona', function () {
    return view('dalgona');
});

Route::get('/strawberry', function () {
    return view('strawberry');
});

Route::get('/cireng', function () {
    return view('cireng');
});


Route::get('/alpukat', function () {
    return view('alpukat');
});

Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::prefix('admin')->middleware('auth.admin')->group(function(){
    Route::get('kelola', [KelolaController::class, 'index'])->name('admin.kelola.index');
    Route::get('kelola', [KelolaController::class, 'index'])->name('admin.kelola.index');
    Route::get('kelola', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('authors/store', [AuthorController::class, 'store'])->name('authors.store');
    Route::get('authors/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::put('authors/update/{id}', [AuthorController::class, 'update'])->name('authors.update');
    Route::delete('authors/destroy/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::get('messages/edit/{id}', [MessageController::class, 'edit'])->name('messages.edit');
    Route::put('messages/update/{id}', [MessageController::class, 'update'])->name('messages.update');
    Route::delete('messages/destroy/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('news', [NewsController::class, 'index'])->name('news.index');
});

Route::post('messages', [MessageController::class, 'store'])->name('messages.store');