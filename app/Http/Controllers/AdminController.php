<?php

namespace App\Http\Controllers;

use App\Models\User;
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


    public function destroy(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/tconadmin/login')->with('success','You have logged out!');
    }
}
