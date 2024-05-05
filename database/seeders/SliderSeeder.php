<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            ['Kenek', 'LFofxqBgYs.jpg'],
            ['Central Park', 'pXyWgGBYiY.jpg'],
            ['Colgate', 'wfd0f3ymRi.jpg'],
        ];
        foreach ($objects as $object) {
            $obj = new Slider();
            $obj->name = $object[0];
            $obj->image = $object[1];
            $obj->save();
        }
    }
}
