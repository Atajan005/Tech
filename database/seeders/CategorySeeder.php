<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $objects = [
            ['Monitor', 'Monitors'],
            ['PC accessories', 'PC-accessories'],
            ['Peripheri', 'Peripheri'],
            ['Storage','Storage'],
            ['Laptops', 'Laptops'],
            ['Mobile Peripherals','Mobile-Peripherals'],
        ];

        foreach ($objects as $object) {
            $obj = new category();
            $obj->name = $object[0];
            $obj->slug = $object[1];
            $obj->save();
        }
    }
}
