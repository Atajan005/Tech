<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                BrandSeeder::class,
                CategorySeeder::class,
                SliderSeeder::class,
                ProductSeeder::class,
            ]);
      Product::factory()->count(5)->create();

    }

}
