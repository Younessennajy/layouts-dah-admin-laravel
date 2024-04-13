<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 */
class utilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => $this->faker->name(),
                'prenom' => $this->faker->prenom(),
                'email' => $this->faker->email(),
                'role' => $this->faker->randomElement(['Admin','visiteur']),
                'etat' => $this->faker->randomElement(['active','désactive']),
        ];
    }
}
