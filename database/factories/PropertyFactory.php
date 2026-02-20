<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(4);
        return [
            'user_id' => User::factory(), // Or a fixed user in seeder
            'title' => $title,
            'slug' => Str::slug($title),
            'type' => $this->faker->randomElement(['rent', 'sale']),
            'status' => 'active', // Default to active for simulation
            'price' => $this->faker->numberBetween(50000, 500000),
            'currency' => 'XAF',
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'region' => $this->faker->state(),
            'features' => json_encode(['wifi', 'parking', 'balcony']),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'area' => $this->faker->numberBetween(50, 200),
            'construction_year' => $this->faker->year(),
            'views_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
