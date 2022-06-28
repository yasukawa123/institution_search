<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopPlans>
 */
class ShopPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shop_id' => random_int(1, 5),
            'num' => random_int(1, 5),
            'price' => random_int(1000, 2000),
            'check_in' => '17:00',
            'check_out' => '10:00',
            'filled_up' => '0',
        ];
    }
}
