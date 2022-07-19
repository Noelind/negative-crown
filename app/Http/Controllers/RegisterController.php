<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create(){
        return view('admin.create');
    }

    public function store(){


        $attributes = request()->validate([
            'name' => ['required','max:255'],
            'username' => ['required','min:3','max:255',Rule::unique('users','username')], //Rule::unique('tablename','columname')
            'email' => ['required','email','max:255',Rule::unique('users','email')],
            'password' => ['required','min:7','max:255']
        ]);

        $user = User::create($attributes);

        // auth()->login($user);

        //Redirect user to somewhere / provide a flash message
        return redirect('/tconadmin')->with('success','New account has been created.');

    }
}