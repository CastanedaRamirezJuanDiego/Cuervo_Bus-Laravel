<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name_Driver'=>$this->faker->firstNameMale(50),
            'Email'=>$this->faker->email(),
            'Password'=>$this->faker->password(),
            'Phone_Number'=>$this->faker->numberBetween(10),
            'Age'=>$this->faker->text(),
            'License'=>$this->faker->imageUrl(640, 480, 'animals', true),
            'Center_id'=>$this->faker->numberBetween(1,40),
        ];
    }
}
