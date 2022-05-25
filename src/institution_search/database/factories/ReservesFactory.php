<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserves; // ← 追記 *
use Illuminate\Support\Str; // ← 追記 *

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserves>
 */
class ReservesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 3),
            'shop_id' => random_int(1, 5),
            'shop_plan_id' => random_int(1, 5),
            'reserve_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week'),
        ];
    }
}
