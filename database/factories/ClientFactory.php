<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'clientNom' => fake()->name(),
            'clientprenom' => fake()->unique()->safeEmail(),
            'clientAdresse' => fake()->address(),
            'clientVille' => fake()->city(),
            'clientCodePostal' => fake()->postcode(),
            'clientTelephone' => fake()->phoneNumber(),
            'clientEmail' => fake()->unique()->safeEmail(),
            'clientDateNaissance' => fake()->date(),
            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
