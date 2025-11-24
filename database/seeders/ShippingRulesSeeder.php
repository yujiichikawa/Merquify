<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipping_rules = [
            [
                'id' => 1,
                'name' => 'Entrega Padrão',
                'type' => 'flat_amount',
                'minimum_amount' => null,
                'charge' => 30,
                'is_active' => 1,
                'created_at' => '2025-09-07 00:56:11',
                'updated_at' => '2025-09-07 00:56:11',
            ],
        ];
        DB::table('shipping_rules')->insert($shipping_rules);
    }
}
