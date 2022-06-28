<?php

namespace Database\Factories;


use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'category_id' => Category::inRandomOrder()->first(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraphs(4, true),
            'body' => $this->faker->paragraphs(10, true),
            'published_at' => $this->faker->date,
        ];
    }
}
