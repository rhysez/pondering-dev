<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $wordsInTitle = explode(' ', $title);
        $slug = strtolower(implode('-', $wordsInTitle));

        return [
            'id' => $this->faker->uuid(),
            'title' => $title,
            'body' => $this->faker->paragraph(30),
            'slug' => $slug,
        ];
    }
}
