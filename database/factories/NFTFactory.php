<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NFT>
 */
class NFTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(10),
            'path_image' => $this->faker->imageUrl(),
            'token_id' => Str::uuid()->toString(),
            'contract_address' => Str::random(42),
            'metadata' => json_encode([
                'attributes' => [
                    'rarity' => $this->faker->randomElement(['common', 'rare', 'legendary']),
                    'background_color' => $this->faker->safeColorName(),
                    'power_level' => $this->faker->numberBetween(1, 100),
                ]
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
