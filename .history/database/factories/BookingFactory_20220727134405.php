<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\User;
use App\Models\Shop;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'shop_id' => Shop::factory(),
            'date' => $this->faker->dateTimeBetween($startDate = '-', $endDate = '+1 year'),
            'number' => $this->faker->numberBetween($min = 1, $max = 50),
        ];
    }
}
