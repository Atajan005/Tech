<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\category;
use App\Models\Homework;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $brand = Brand::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'brand_id' => $brand->id,
            'name' => fake()->userName(),
//            'image' => fake()->image(),
            'price' => rand(1, 10000),
            'discount' => rand(1, 100),
            'created_at' => fake()->dateTimeBetween('-1 year', '-3 month')->format('Y-m-d H:i:s'),
            'updated_at' => fake()->dateTimeBetween('-1 week', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
