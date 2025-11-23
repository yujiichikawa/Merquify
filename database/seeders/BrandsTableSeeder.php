<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'id' => 1,
                'image' => 'uploads/apple.png',
                'name' => 'Apple',
                'slug' => 'apple',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:58:42',
                'updated_at' => '2025-09-03 21:58:42'
            ],
            [
                'id' => 2,
                'image' => 'uploads/nike.png',
                'name' => 'Nike',
                'slug' => 'nike',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:58:51',
                'updated_at' => '2025-09-03 21:58:51'
            ],
            [
                'id' => 3,
                'image' => 'uploads/samsung.png',
                'name' => 'Samsung',
                'slug' => 'samsung',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:58:59',
                'updated_at' => '2025-09-03 21:58:59'
            ],
            [
                'id' => 4,
                'image' => 'uploads/adidas.png',
                'name' => 'Adidas',
                'slug' => 'adidas',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:59:06',
                'updated_at' => '2025-09-03 21:59:06'
            ],
            [
                'id' => 5,
                'image' => 'uploads/microsoft.png',
                'name' => 'Microsoft',
                'slug' => 'microsoft',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:59:15',
                'updated_at' => '2025-09-03 21:59:15'
            ],
            [
                'id' => 6,
                'image' => 'uploads/toyota.png',
                'name' => 'Toyota',
                'slug' => 'toyota',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:59:33',
                'updated_at' => '2025-09-03 21:59:33'
            ],
            [
                'id' => 7,
                'image' => 'uploads/gucci.png',
                'name' => 'Gucci',
                'slug' => 'gucci',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:59:59',
                'updated_at' => '2025-09-03 21:59:59'
            ],
            [
                'id' => 8,
                'image' => 'uploads/amazon.png',
                'name' => 'Amazon',
                'slug' => 'amazon',
                'is_active' => 1,
                'created_at' => '2025-09-03 22:00:15',
                'updated_at' => '2025-09-03 22:00:15'
            ],
        ];
        DB::table('brands')->insert($brands);

    }
}
