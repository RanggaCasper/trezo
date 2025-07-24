<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'products' => Product::all()
        ]);
    }
}
