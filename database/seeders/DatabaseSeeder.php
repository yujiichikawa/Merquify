<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Database\Seeders\Admin\AdminSeeder;
use Database\Seeders\Admin\PermissionSeeder;
use Database\Seeders\Admin\SettingSeeder;
use Database\Seeders\Frontend\UserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /** Admin Seeders */
        $this->call(AdminSeeder::class);
        $this->call(PermissionSeeder::class);


        /** Frontend Seeders */
        $this->call(UserSeeder::class);

        /** Banner Ad Seeder */
        $this->call(BannerAdSeeder::class);

        /** Sliders Seeder */
        $this->call(SlidersSeeder::class);

        /** Hero Banner Seeder */
        $this->call(HeroBannerSeeder::class);

        /** Setting Seeder */
        $this->call(SettingSeeder::class);

        /** Categories Seeder */
        $this->call(CategoriesTableSeeder::class);

        /** Brands Seeder */
        $this->call(BrandsTableSeeder::class);

        /** Tags Seeder */
        $this->call(TagsTableSeeder::class);

        /** Shipping Rules Seeder */
        $this->call(ShippingRulesSeeder::class);

        /** Demo Product Seeder */
        $this->call(DemoProductSeeder::class);

        /** Demo Order Seeder */
        $this->call(DemoOrderSeeder::class);

        /** Custom Pages Seeder */
        $this->call(CustomPagesSeeder::class);


    }
}
