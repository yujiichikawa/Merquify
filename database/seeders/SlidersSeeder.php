<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = array(
            array('id' => '1', 'image' => 'uploads/banner01.jpg', 'title' => 'SLIDER AQUI', 'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'btn_url' => '#', 'is_active' => 1, 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '2', 'image' => 'uploads/banner02.jpg', 'title' => 'SLIDER AQUI', 'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'btn_url' => '#', 'is_active' => 1, 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
       );

        \DB::table('sliders')->insert($sliders);
    }
}
