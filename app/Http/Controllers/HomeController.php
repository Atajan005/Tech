<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $products = Product::get();

        return view('home', [
            'sliders' => $slider,
            'products' => $products,
        ]);

    }
}
