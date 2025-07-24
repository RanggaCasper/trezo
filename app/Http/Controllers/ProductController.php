<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($productId)
    {
        $product = Product::with('category')->find($productId);

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
