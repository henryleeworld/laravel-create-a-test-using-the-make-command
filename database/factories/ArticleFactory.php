<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => $title = fake()->sentence,
            'slug'        => Str::slug($title, language: app()->getLocale()),
            'description' => fake()->paragraph,
            'body'        => fake()->paragraphs(3, true),
            'user_id'     => User::all()->random(),
        ];
    }
}
