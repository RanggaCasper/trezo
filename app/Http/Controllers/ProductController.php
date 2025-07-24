<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->first();

        if (!$product) {
            return Inertia::render('ProductDetail', [
                'product' => null,
                'title' => 'Produk Tidak Ditemukan'
            ]);
        }

        return Inertia::render('ProductDetail', [
            'product' => $product,
            'title' => $product->name
        ]);
    }
}
