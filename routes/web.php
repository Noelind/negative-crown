<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', function () {
    return view('page.articles', ['articles' => Article::latest()->with('category', 'author')->get()]);
})->name('home');


Route::get('/category/{category:slug}', function (Category $category) {
    return view('page.articles', ['articles' => $category->articles] );
})->name('category');

// Author's Page
Route::get('/author/{author:username}', function (User $author) {
    return view('page.articles', [ 'articles' => $author->articles]);
})->name('author');



// Read single article
Route::get('/article/{article:slug}', function (Article $article) {
    return view('page.article', ['article' => $article]);
})->name('article');
