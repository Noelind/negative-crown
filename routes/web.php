<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
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

// with('category')->get() | N+1 Queries problem solution

// Homepage
Route::get('/', [ArticleController::class, 'showHome'])->name('home');

// Read single article
Route::get('/article/{article:slug}',[ArticleController::class, 'showArticle'])->name('article');



// Search Results
Route::get('/search', [ArticleController::class, 'showSearch'])->name('search');


// Category
Route::get('/category/{category:slug}',[ArticleController::class, 'showCategory'])->name('category');

// Author's Page
Route::get('/author/{author:username}',[ArticleController::class, 'showAuthor'])->name('author');
