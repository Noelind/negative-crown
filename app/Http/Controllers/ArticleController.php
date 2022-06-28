<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showHome(){
        return view('page.articles', [
            'articles' => Article::latest('published_at')->limit(7)->get()
        ]);
    }

    public function showAllArticles(){

        // dd(Article::latest('published_at')->simplePaginate(9));
        return view('page.articles', [
            'articles' => Article::latest('published_at')->paginate(9)
        ]);
    }

    public function showArticle(Article $article) {
        return view('page.article', [
            'article' => $article
        ]);
    }

    public function showSearch(){
        return view('page.articles', [
            'articles' =>  Article::latest()->filter(request(['search']))->get()
        ]);
    }

    public function showCategory(Category $category){
        return view('page.articles', [
            'articles' => $category->articles,
            'currentCategory' => $category
        ]);
    }

    public function showAuthor(User $author){
        return view('page.articles', [
            'articles' => $author->articles
        ]);
    }
}
