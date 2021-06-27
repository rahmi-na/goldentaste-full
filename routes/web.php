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


Route::get('/recipe', function () {
    return view('recipe');
});

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
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
});