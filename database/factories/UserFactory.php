<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name'=>$this->faker->streetAddress(50),
            'Img_User'=>$this->faker->imageUrl(640, 480, 'animals', true),
            'Email'=>$this->faker->email(),
            'Password'=>$this->faker->password(),
            'Matricula'=>$this->faker->buildingNumber(10),
            'Cuatrimestre_id'=>$this->faker->numberBetween(1,40),
            'Direction_id'=>$this->faker->numberBetween(1,40),
            'Trajectory_id'=>$this->faker->numberBetween(1,40),
        ];
    }
}
