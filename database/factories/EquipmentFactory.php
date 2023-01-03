<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "type_id" => fake()->numberBetween(1, 20),
            "name" => fake()->randomElement(['Mask', 'Snorkel', 'BuoyancyCompensator', 'DiveSuit', 'AirTank', 'Fins', 'DiveBooties', 'WeightBelt', 'DiveComputer', 'PressureGauge', 'AlternateAirSource', 'Regulator']),
            "manufacturer_id" => fake()->numberBetween(1, 30),
            "size_id" => fake()->numberBetween(1, 30),
            "color_id" => fake()->numberBetween(1, 30),
            "description" => fake()->colorName(),
        ];
    }
}
