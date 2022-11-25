<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Truck_stop>
 */
class Truck_StopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name_Truck_stop'=>$this->faker->streetAddress(50),
            'Length'=>$this->faker->buildingNumber(100),
            'Latitude'=>$this->faker->buildingNumber(100),
        ];
    }
}
