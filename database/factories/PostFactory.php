<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fake_date = $this->faker->dateTimeBetween('0 days', '30 days');
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'reactions' => rand(0, 1500),
            'created_at' => $fake_date,
            'updated_at' => $fake_date
        ];
    }
}
