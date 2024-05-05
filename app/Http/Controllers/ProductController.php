<?php

namespace App\Http\Controllers;

use App\Models\Product;
use function Illuminate\Http\Client\post;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $productShow = Product::where('id', $id)
            ->firstOrFail();
        $recomends = Product::where('id', '!=', $id)
            ->inRandomOrder()
            ->take(4)
            ->get();
        return view('product.show', ['productShow' => $productShow,
                        'recomends' => $recomends]);

    }

}
