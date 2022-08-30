<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = ::class;

    public function definition()
    {
        return [
            'content' => $this->faker->text(50), 
            'user_id' => User::factory(),
        ];
    }
}
