<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnement>
 */
class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->numerify('########'),
            'lieu' => $this->faker->city,
            'datedebut' => $this->faker->date(),
            'datefin' => $this->faker->date(),
            'garedepart' => $this->faker->city,
            'garearrive' => $this->faker->city,
            'image' => $this->faker->imageUrl(660, 360, true), 
        ];
    }
}
