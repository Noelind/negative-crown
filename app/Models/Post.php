<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ['title','excerpt','body'];

    protected $with = ['category', 'author'];

    /*
        Call this method with the word after 'scope'
        The first parameter '$query' is provided by Laravel
        So the parameter we pass is actually the second one here.
    */
    public function scopeFilter($query, array $filters) {

        // If (when) there is a search parameter in the request
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%'));
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
