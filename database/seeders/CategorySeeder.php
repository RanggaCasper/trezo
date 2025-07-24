<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clothing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Books', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Home & Garden', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports & Outdoor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beauty & Health', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Automotive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Food & Beverages', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($categories);
    }
}
