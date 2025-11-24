<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hero_banners = array(
            array('id' => '1', 'banner_one' => 'uploads/banner03.jpg', 'title_one' => 'HERO BANNER AQUI', 'btn_url_one' => '#', 'banner_two' => '', 'title_two' => '', 'btn_url_two' => '#', 'created_at' => NULL, 'updated_at' => '2025-11-24 21:58:42'),
        );

        \DB::table('hero_banners')->insert($hero_banners);
    }
}
