<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        $slider = Slider::get();
        $products = Product::get();

        return view('home', [
            'brands' => $brands,
            'sliders' => $slider,
            'products' => $products,
        ]);

    }
}
