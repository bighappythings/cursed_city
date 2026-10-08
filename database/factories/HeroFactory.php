<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hero>
 */
class HeroFactory extends Factory
{
    protected $model = Hero::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'move' => fake()->numberBetween(0, 20),
            'agility' => fake()->word(),
            'defence' => fake()->word(),
            'vitality' => fake()->word(),
            'attributes' => fake()->word(),
            'size' => fake()->word(),
            'wounds' => fake()->numberBetween(1, 20),
            'weapons' => fake()->word(),
            'abilities' => fake()->word(),
            'inspiration' => fake()->word()
        ];
    }
}
