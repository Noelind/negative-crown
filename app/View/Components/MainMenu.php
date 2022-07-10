<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class MainMenu extends Component
{
    public function render(){
        return view('front.components.menu.view', ['categories' => Category::all()]);
    }
}
