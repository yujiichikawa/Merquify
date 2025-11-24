<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerAdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $banner_ads = array(
            array('id' => '1', 'banner_id' => 'banner_one', 'image' => 'uploads/banner01.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '2', 'banner_id' => 'banner_two', 'image' => 'uploads/banner02.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '3', 'banner_id' => 'banner_three', 'image' => 'uploads/banner03.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '4', 'banner_id' => 'banner_four', 'image' => 'uploads/banner01.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '5', 'banner_id' => 'banner_five', 'image' => 'uploads/banner02.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '6', 'banner_id' => 'banner_six', 'image' => 'uploads/banner03.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '7', 'banner_id' => 'banner_seven', 'image' => 'uploads/banner01.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '8', 'banner_id' => 'side_banner_one', 'image' => 'uploads/banner02.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '9', 'banner_id' => 'side_banner_two', 'image' => 'uploads/banner03.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
            array('id' => '10', 'banner_id' => 'side_banner_three', 'image' => 'uploads/banner01.jpg', 'title' => 'BANNER AQUI', 'url' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42')
        );

        \DB::table('banner_ads')->insert($banner_ads);
    }
}
