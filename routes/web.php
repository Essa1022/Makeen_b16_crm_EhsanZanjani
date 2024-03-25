<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Users Routes
Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::post('create',[UserController::class, 'store'])->name('store');
    Route::post('edit/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
});

// Products Routes
Route::group(['prefix' => 'products', 'as' => 'products.'], function() {
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::get('index', [ProductController::class, 'index'])->name('index');
    Route::post('create', [ProductController::class, 'store'])->name('store');
    Route::post('edit/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

//Orders Routes
Route::group(['prefix' => 'orders', 'as' => 'orders.'], function() {
    Route::get('create', [OrderController::class, 'create'])->name('create');
    Route::get('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::get('index', [OrderController::class, 'index'])->name('index');
    Route::post('create', [OrderController::class, 'store'])->name('store');
    Route::post('edit/{id}', [OrderController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
});

// Category Routes
Route::group(['prefix' => 'categories', 'as' => 'categories.'], function() {
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::get('index', [CategoryController::class, 'index'])->name('index');
    Route::post('create', [CategoryController::class, 'store'])->name('store');
    Route::post('edit/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

// Articles Routes
Route::group(['prefix' => 'articles', 'as' => 'articles.'], function() {
    Route::get('create', [ArticleController::class, 'create'])->name('create');
    Route::get('edit/{id}', [ArticleController::class, 'edit'])->name('edit');
    Route::get('index', [ArticleController::class, 'index'])->name('index');
    Route::post('create', [ArticleController::class, 'store'])->name('store');
    Route::post('edit/{id}', [ArticleController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ArticleController::class, 'destroy'])->name('destroy');
});
