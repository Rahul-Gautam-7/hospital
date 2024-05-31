<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a=array("male","female");
        
        $k =array_rand($a);

        $gender=$a[$k];


        return [
            
            'name' => fake()->name(),
            'mobile' => fake()->phoneNumber(),
            'gender' => $gender,
            'address' => fake()->address(),
            'gmail' => fake()->unique()->safeEmail(),
            'reference' => fake()->name(),

        ];
    }
}
