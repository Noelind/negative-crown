<?php

use App\Models\Article;
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

Route::get('/', function () {
    return view('homepage/index');
});


// Find an article by its slug and pass it to a view called 'article'
Route::get('articles/{article}', function ($slug) {

    $article_content = Article::find($slug);
    
    return view('article/article', [
        'article_content' => $article_content
    ]);
});
