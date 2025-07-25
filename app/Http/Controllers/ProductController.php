<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();

        return Inertia::render('Admin/Products/index', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    Product::create($request->only('name', 'description', 'price', 'category_id'));

    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
}
    

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $product->update($request->only('name', 'description', 'price', 'category_id'));
    
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
    }
    

    public function create()
    {
        return Inertia::render('Admin/Products/Create', [
            'categories' => \App\Models\Category::all()
        ]);
    }
    

    public function edit(Product $product)
    {
        return Inertia::render('Admin/Products/Edit', [
            'product' => $product,
            'categories' => \App\Models\Category::all()
        ]);
    }
    

}
