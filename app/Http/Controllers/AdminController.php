<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }

    public function login(){
        $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);


       //Auth Failed
        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);


        }
        // Auth Succeeded
        session()->regenerate();
        return redirect('/tconadmin')->with('success', 'Welcome back Giota');

    }

    public function showPanel(){
        return view('admin.panel');
    }

    public function showArticles(){
        return view('admin.panel', [
            'articles' => Article::latest('published_at')->paginate(9)
        ]);
    }


    public function showCategories(){
        return view('admin.panel', ['categories' => Category::all()]);
    }


    public function destroy(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/tconadmin/login')->with('success','You have logged out!');
    }
}
