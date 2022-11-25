<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Bus_id'=>$this->faker->numberBetween(1,40),
            'Truck_stop_id'=>$this->faker->numberBetween(1,40),
            'Trajectory_id'=>$this->faker->numberBetween(1,40),
        ];
    }
}
