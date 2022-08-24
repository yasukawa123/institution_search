<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shop; // ← 追記 *
use Illuminate\Support\Str; // ← 追記 *

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shops>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->country,
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber,
            'manager' => $this->faker->name,
            'zip_code_jp' => $this->faker->postcode,
            'prefecture' => $this->faker->prefecture,
            'city' => $this->faker->city,
            'unique_name' => $this->faker->streetAddress,
            'images01' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
            'images02' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
            'images03' => $this->faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
            'introduction_text' => $this->faker->realText,
        ];
    }
}
