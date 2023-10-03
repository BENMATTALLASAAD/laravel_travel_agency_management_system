<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customers>
 */
class customersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'login'=>fake()->unique()->safeEmail(),
            'password'=>Hash::make('password'), 
            'nom' => fake()->name(),
            'prénom' => fake()->lastName(),
            'image' =>fake()->imageUrl(),
            'adresse'=>fake()->text(),
            'email' => fake()->unique()->safeEmail(),
            'num_telephone'=>fake()->phoneNumber(),
            'sexe'=>fake()->randomElement(['Homme', 'Femme']),
            'date_naissance'=>fake()->unique()->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null)->format('Y-m-d'),

        ];
    }
}
