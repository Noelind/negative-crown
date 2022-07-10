<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showHome(){
        return view('front.articles', [
            'articles' => Article::latest('published_at')->limit(7)->get()
        ]);
    }

    public function showAllArticles(){
        return view('front.articles', [
            'articles' => Article::latest('published_at')->paginate(9)
        ]);
    }

    public function showArticle(Article $article) {
        return view('front.article', [
            'article' => $article
        ]);
    }

    public function showSearch(){
        return view('front.articles', [
            'articles' =>  Article::latest()->filter(request(['search']))->get()
        ]);
    }

    public function showCategory(Category $category){
        return view('front.articles', [
            'articles' => $category->articles,
            'currentCategory' => $category
        ]);
    }

    public function showAuthor(User $author){
        return view('front.articles', [
            'articles' => $author->articles,
            'author' => $author
        ]);
    }
}
