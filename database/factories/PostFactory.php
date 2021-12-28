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
        return [
            //Create fake data for testing etc...
            //php artisan tinker
            // App\Models\Post::factory()->times(200)->create(['user_id'=>10]);
            'body' => $this->faker->sentence(20),
        ];
    }
}
