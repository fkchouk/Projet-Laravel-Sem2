<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chauffeur>
 */
class ChauffeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'ncin' =>fake()->ean8(),
           'nom'=> faker()->word(),
           'prenom'=> faker()->word(),
           'salaire'=>faker()->randomFloat(2),
           'adresse'=>faker()->paragraph()
           
        ];
    }
}
