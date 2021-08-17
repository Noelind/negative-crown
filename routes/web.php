<?php

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

Route::get('articles/{article}', function ($slug) {
    
    // Find article path (will turn into db probably)
    $article_path = __DIR__ . "/../resources/articles/{$slug}/{$slug}.html";
    
    // If article doesn't exist return 404 page
    if (! file_exists($article_path)) {
        return redirect ('404');
    }

    // Retrieve article content
    $article_content = file_get_contents($article_path);

    // Pass article content into view
    return view('article/article', [
        'article_content' => $article_content
    ]);
});
