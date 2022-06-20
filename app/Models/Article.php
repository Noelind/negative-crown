<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','excerpt','body','category','author'];

    protected $with = ['category','author']; // $with = Eager load to resolve n+1 problem

    // Associate an article with its category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Associate an article with its author
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // General return articles function
    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query -> where('title', 'like', '%' . $search . '%')
                   -> orWhere('body', 'like', '%' . $search . '%'));
        }
}
