<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index($id)
    {
        $products = Product::where('brand_id', $id)
            ->get();
        return view('brandShow', ['products' => $products]);
    }
}
