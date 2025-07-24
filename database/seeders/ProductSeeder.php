<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Electronics (category_id: 1)
            [
                'category_id' => 1,
                'name' => 'Smartphone Samsung Galaxy S24',
                'description' => 'Latest Samsung smartphone with advanced camera features and high-performance processor.',
                'price' => 999.99,
                'slug' => 'smartphone-samsung-galaxy-s24',
                'image' => 'https://placehold.co/400x300/4a90e2/ffffff?text=Samsung+Galaxy+S24',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'name' => 'MacBook Pro M3',
                'description' => 'Apple MacBook Pro with M3 chip, perfect for professional work and creative tasks.',
                'price' => 1999.99,
                'slug' => 'macbook-pro-m3',
                'image' => 'https://placehold.co/400x300/2c3e50/ffffff?text=MacBook+Pro+M3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'name' => 'AirPods Pro 2',
                'description' => 'Wireless earbuds with active noise cancellation and spatial audio.',
                'price' => 249.99,
                'slug' => 'airpods-pro-2',
                'image' => 'https://placehold.co/400x300/e74c3c/ffffff?text=AirPods+Pro+2',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Clothing (category_id: 2)
            [
                'category_id' => 2,
                'name' => 'Cotton T-Shirt',
                'description' => 'Comfortable 100% cotton t-shirt available in various colors and sizes.',
                'price' => 29.99,
                'slug' => 'cotton-t-shirt',
                'image' => 'https://placehold.co/400x300/f39c12/ffffff?text=Cotton+T-Shirt',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Denim Jeans',
                'description' => 'Classic blue denim jeans with perfect fit and durability.',
                'price' => 79.99,
                'slug' => 'denim-jeans',
                'image' => 'https://placehold.co/400x300/3498db/ffffff?text=Denim+Jeans',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Winter Jacket',
                'description' => 'Warm and stylish winter jacket with water-resistant material.',
                'price' => 149.99,
                'slug' => 'winter-jacket',
                'image' => 'https://placehold.co/400x300/9b59b6/ffffff?text=Winter+Jacket',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Books (category_id: 3)
            [
                'category_id' => 3,
                'name' => 'Laravel Best Practices',
                'description' => 'Complete guide to Laravel development with modern best practices and patterns.',
                'price' => 49.99,
                'slug' => 'laravel-best-practices',
                'image' => 'https://placehold.co/400x300/e67e22/ffffff?text=Laravel+Book',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'name' => 'JavaScript: The Good Parts',
                'description' => 'Essential reading for JavaScript developers to write better code.',
                'price' => 34.99,
                'slug' => 'javascript-the-good-parts',
                'image' => 'https://placehold.co/400x300/1abc9c/ffffff?text=JavaScript+Book',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Home & Garden (category_id: 4)
            [
                'category_id' => 4,
                'name' => 'Coffee Maker',
                'description' => 'Automatic coffee maker with programmable timer and multiple brew sizes.',
                'price' => 89.99,
                'slug' => 'coffee-maker',
                'image' => 'https://placehold.co/400x300/8e44ad/ffffff?text=Coffee+Maker',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'Indoor Plant Set',
                'description' => 'Collection of easy-care indoor plants perfect for home decoration.',
                'price' => 39.99,
                'slug' => 'indoor-plant-set',
                'image' => 'https://placehold.co/400x300/27ae60/ffffff?text=Indoor+Plants',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Sports & Outdoor (category_id: 5)
            [
                'category_id' => 5,
                'name' => 'Running Shoes',
                'description' => 'Professional running shoes with advanced cushioning and support.',
                'price' => 129.99,
                'slug' => 'running-shoes',
                'image' => 'https://placehold.co/400x300/34495e/ffffff?text=Running+Shoes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'name' => 'Yoga Mat',
                'description' => 'Non-slip yoga mat with extra thickness for comfortable practice.',
                'price' => 24.99,
                'slug' => 'yoga-mat',
                'image' => 'https://placehold.co/400x300/16a085/ffffff?text=Yoga+Mat',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Beauty & Health (category_id: 6)
            [
                'category_id' => 6,
                'name' => 'Skincare Set',
                'description' => 'Complete skincare routine set with cleanser, toner, and moisturizer.',
                'price' => 69.99,
                'slug' => 'skincare-set',
                'image' => 'https://placehold.co/400x300/e91e63/ffffff?text=Skincare+Set',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 6,
                'name' => 'Vitamin C Supplement',
                'description' => 'High-quality vitamin C supplement for immune system support.',
                'price' => 19.99,
                'slug' => 'vitamin-c-supplement',
                'image' => 'https://placehold.co/400x300/ff9800/ffffff?text=Vitamin+C',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Automotive (category_id: 7)
            [
                'category_id' => 7,
                'name' => 'Car Phone Holder',
                'description' => 'Universal car phone holder with 360-degree rotation and secure grip.',
                'price' => 15.99,
                'slug' => 'car-phone-holder',
                'image' => 'https://placehold.co/400x300/607d8b/ffffff?text=Phone+Holder',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 7,
                'name' => 'Car Air Freshener',
                'description' => 'Long-lasting car air freshener with pleasant vanilla scent.',
                'price' => 7.99,
                'slug' => 'car-air-freshener',
                'image' => 'https://placehold.co/400x300/795548/ffffff?text=Air+Freshener',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Food & Beverages (category_id: 8)
            [
                'category_id' => 8,
                'name' => 'Premium Coffee Beans',
                'description' => 'Arabica coffee beans sourced from the best farms around the world.',
                'price' => 24.99,
                'slug' => 'premium-coffee-beans',
                'image' => 'https://placehold.co/400x300/6d4c41/ffffff?text=Coffee+Beans',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 8,
                'name' => 'Organic Honey',
                'description' => 'Pure organic honey harvested from local beekeepers.',
                'price' => 12.99,
                'slug' => 'organic-honey',
                'image' => 'https://placehold.co/400x300/ffc107/ffffff?text=Organic+Honey',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Product::insert($products);
    }
}
