<?php

namespace Database\Factories;

use App\Models\TarotCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarotCardFactory extends Factory
{
    protected $model = TarotCard::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'arcana' => 'major',
            'number' => fake()->randomElement(['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX', 'XX', 'XXI', '0']),
            'description' => fake()->sentence(),
            'meaning' => fake()->paragraph(),
            'message' => fake()->paragraph(),
            'image' => 'tarot/placeholder.webp',
            'keywords' => fake()->words(3),
        ];
    }
}
