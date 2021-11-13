<?php

namespace App\Models;

class Article {

    public static function find($slug) {
            
    // Find article path (will turn into db probably)
    $article_path = resource_path("articles/{$slug}/{$slug}.html");
    
    // If article doesn't exist return 404 page
    if (! file_exists($article_path)) {
        return redirect ('404');
    }

    // Retrieve article content
    return cache()->remember("articles.{$slug}", 10, fn() => (file_get_contents($article_path)));
    
    }

}