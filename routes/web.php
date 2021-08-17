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
    
    // Find articles content
    $article_content = file_get_contents(__DIR__ . "/../resources/articles/{$slug}/{$slug}.html");

    // Pass article content into view
    return view('article/article', [
        'article_content' => $article_content
    ]);
});
