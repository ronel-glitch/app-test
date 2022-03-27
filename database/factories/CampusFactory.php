<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'campus_name' => $this->faker->word." campus",
            'address' => $this->faker->address,
        ];
    }
}
