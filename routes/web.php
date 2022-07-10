<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
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

Route::controller(ArticleController::class)->group(function () {

    // Homepage
    Route::get('/', 'showHome')->name('home');

    // All Articles
    Route::get('/all-articles', 'showAllArticles')->name('all-articles');

    // Read single article
    Route::get('/article/{article:slug}', 'showArticle')->name('article');

    // Search Results
    Route::get('/search','showSearch')->name('search');

    // Category
    Route::get('/category/{category:slug}', 'showCategory')->name('category');

    // Author's Page
    Route::get('/author/{author:username}','showAuthor')->name('author');
});


Route::get('/tconadmin/register', [RegisterController::class,'create']);
Route::post('/tconadmin/register', [RegisterController::class,'store']);
