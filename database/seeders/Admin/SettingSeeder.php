<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $settings = array(
            array('id' => '1', 'key' => 'site_name', 'value' => 'Merquify', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '2', 'key' => 'site_email', 'value' => 'merquify@gmail.com', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '3', 'key' => 'site_phone', 'value' => '000000000', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '4', 'key' => 'site_currency', 'value' => 'BRL', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '5', 'key' => 'site_currency_icon', 'value' => '$', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '6', 'key' => 'paypal_status', 'value' => 'active', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:51:07'),
            array('id' => '7', 'key' => 'paypal_mode', 'value' => 'sandbox', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-06 10:00:41'),
            array('id' => '8', 'key' => 'paypal_currency', 'value' => 'BRL', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:52:46'),
            array('id' => '9', 'key' => 'paypal_rate', 'value' => '1', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:51:14'),
            array('id' => '10', 'key' => 'paypal_client_id', 'value' => '', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-06 11:07:27'),
            array('id' => '11', 'key' => 'paypal_secret', 'value' => '', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-06 11:07:27'),
            array('id' => '23', 'key' => 'admin_commission', 'value' => '15', 'created_at' => '2025-08-11 09:45:44', 'updated_at' => '2025-08-11 09:45:44'),
            array('id' => '24', 'key' => 'site_short_description', 'value' => 'Ligando pessoas, produtos e possibilidades', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '25', 'key' => 'site_address', 'value' => 'address', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '26', 'key' => 'site_copyright', 'value' => '2025, Merquify', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '27', 'key' => 'site_hours', 'value' => '10:00 - 18:00, Seg - Sex', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '28', 'key' => 'site_logo', 'value' => 'uploads/logo.svg', 'created_at' => '2025-08-27 07:30:25', 'updated_at' => '2025-08-27 07:30:25'),
            array('id' => '29', 'key' => 'site_favicon', 'value' => 'uploads/favicon.ico', 'created_at' => '2025-08-27 07:30:25', 'updated_at' => '2025-08-27 07:30:25')
        );

        \DB::table('settings')->insert($settings);
    }
}
