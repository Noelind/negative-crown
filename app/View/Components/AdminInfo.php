<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AdminInfo extends Component
{
    public function render(){
        return view('admin.components.meta.admin', ['admin' => Auth::user()]);
    }
}
