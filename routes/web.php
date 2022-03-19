<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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


// Homepage Route
Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest()->with('author','category')->get()
    ]);

});

// Post Route
Route::get('posts/{post:slug}', function (Post $post) { // post:slug looks for slug column in db

    return view('post', [
        'post'=> $post
    ]);
    
});


Route::get('categories/{category:slug}', function (Category $category) {
        // Return posts view as category page and use all() function to bring all posts associated with category
        return view('posts', [
            'posts' => $category->posts->load(['category','author'])
        ]);
});

Route::get('authors/{author:username}', function (User $author) {
        // Return posts view as category page and use all() function to bring all posts associated with category
        return view('posts', [
            'posts' => $author->posts->load(['category','author'])
        ]);
});