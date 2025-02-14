<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Judul dengan 3 kata
            'author' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 10, 100), // Harga antara 10 hingga 100
            'description' => $this->faker->paragraph(4),
            'image_url' => 'img/profile.jpeg',
        ];
    }
}
