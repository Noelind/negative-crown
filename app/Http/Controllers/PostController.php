<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts', [

            /*
                Model Post,
                latest method return in descending order posts,
                filter method is scopeFilter(), passing the request array of search="search term"
                get method returns the collection as 'posts'

            */
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);

    }

    public function show(Post $post){

        return view('post', [
            'post'=> $post
        ]);
    }
}
