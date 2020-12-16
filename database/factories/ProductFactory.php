<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => $this->faker->numberBetween(1,3),
            'brand' => $this->faker->name,
            'body' => $this->faker->text(150),
            'price' => $this->faker->randomDigitNotNull,
            'discount' => $this->faker->numberBetween(0,60),
            'image' => $this->faker->imageUrl($width=500,$height=500,'sports'),
        ];
    }
}
