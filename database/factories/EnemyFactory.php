<?php

namespace Database\Factories;

use App\Models\Enemy;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type;

/**
 * @extends Factory<Enemy>
 */
class EnemyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'move' => fake()->move(),
            'wounds' => fake()->wounds(),
            'size' => fake()->size(),
            'weapons' => fake()->weapons(),
            'dice' => fake()->dice(),
            'damage' => fake()->numberBetween(0, 100),
            'specialRules' => fake()->specialRules(),
            'behaviours' => fake()->behaviours(),
            'bio' => fake()->realText(500),
            'type_id' => Type::inRandomOrder()->first()->id,
        ];
    }
}
