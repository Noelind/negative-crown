<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// Homepage
Route::get('/', function () {
    return view('page.home', ['articles' => Article::all()]);
})->name('home');

// Author's Page
Route::get('/author', function () {
    return view('page.author', ['articles' => Article::all()]);
})->name('author');



// Read single article
Route::get('/article/{article}', function ($id) {
    return view('page.article', ['article' => Article::findOrFail($id)]);
})->name('article');
