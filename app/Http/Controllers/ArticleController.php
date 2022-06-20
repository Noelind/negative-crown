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
            'articles' => Article::latest('published_at')->get(),
            'categories' => Category::all()
        ]);
    }

    public function showArticle(Article $article) {
        return view('page.article', [
            'article' => $article,
            'categories' => Category::all()
        ]);
    }

    public function showSearch(){
        return view('page.articles', [
            'articles' =>  Article::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function showCategory(Category $category){
        return view('page.articles', [
            'articles' => $category->articles,
            'currentCategory' => $category,
            'categories' => Category::all()
        ]);
    }

    public function showAuthor(User $author){
        return view('page.articles', [
            'articles' => $author->articles,
            'categories' => Category::all()
        ]);
    }


}
