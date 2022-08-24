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
<<<<<<< HEAD
            'shop_id' => random_int(1, 5),
            'num' => random_int(1, 5),
            'price' => random_int(1000, 2000),
            'check_in' => '17:00',
            'check_out' => '10:00',
            'filled_up' => '0',
=======
            'shop_id' => random_int(1, 12),
            'name' => $this->faker->country . "【 PLAN 】",
            'introduction_text' => $this->faker->realText,
            'limit_num' => random_int(1, 8),
            'limit_num_small' => random_int(0, 4),
            'price' => random_int(2000, 20000),
            'check_in' => "15:00",
            'check_out' => "11:00",
            'filled_up' => random_int(0, 4),
            'images01' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
            'images02' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
            'images03' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
>>>>>>> feature-make-design_site
        ];
    }
}
