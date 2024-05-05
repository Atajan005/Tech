<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\Uid\Factory\create;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            ['5','3', 'Игровой ноутбук MSI GF63 THIN (Процессор Intel® Core i7-11800H)','3gfUvrMNPi2scSQSJ2SN.jpg','26000','5'],
            ['5','5','Ультрабук ASUS VivoBook X413E (Процессор Intel® Core i5-1135Ga7)','8sEye2Qq8rUs26YXKX4X.jpg','15000','0'],
            ['4','4','Внешний жесткий диск TRANSCEND 1TB STOREJET','6AGUQdVyGQEVy5MJhcc1.jpg','1080','5'],
            ['4','5','Внешний жесткий диск TOSHIBA 500 GB STORE BASICS','cGUt0nIA08szV97BJWdW.jpg','840','0'],
            ['6','2','Планшет Apple iPad Pro (A2377)','CiONim6TS1ebMBw1YmS0.jpg','22200','50'],
            ['2','6','Планшет SAMSUNG GALAXY SM-T225 (TAB A7 Lite) (Серый цвет)','oYipU1idONSY3gz8sKF1.jpg','3400','0'],
            ['3','1','Колонка JBL PARTYBOX 100','2CYJJ2VUdww3hUV7Xpgh.jpg','6900','5'],
            ['2','3','Коврик для мыши KINGSTON HYPERX ULTRA','69pDB0hOFHeMvOfGoGlN.jpg','1120','10'],
        ];
        foreach ($objects as $object) {
            $obj = new product();
            $obj->category_id = $object[0];
            $obj->brand_id = $object[1];
            $obj->name = $object[2];
            $obj->image = $object[3];
            $obj->price = $object[4];
            $obj->discount = $object[5];
            $obj->save();
        }
    }
}
