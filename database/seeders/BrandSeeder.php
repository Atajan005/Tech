<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            ['JBL', 'hOgW84GktW.png', 'JBL'],
            ['Apple', 'i95KtlSFRw.png', 'Apple'],
            ['Asus Rog', 'AEMvWkU6at.png', 'Asus-Rog'],
            ['WESTERN DIGITAL', 'lsOEIryI6K.png', 'WESTERN-DIGITAL'],
            ['LOGITECH', 'TJGR84g5Wj.png', 'LOGITECH'],
            ['GIGABYTE', 'MDvdpa645R.png', 'GIGABYTE'],
        ];

        foreach ($objects as $object) {
            $obj = new Brand();
            $obj->name = $object[0];
            $obj->image = $object[1];
            $obj->slug = $object[2];
            $obj->save();
        }
    }
}
