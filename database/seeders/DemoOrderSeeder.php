<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $date = $date = now()->startOfMonth()->addDays(rand(0, now()->daysInMonth - 1))->format('Y-m-d H:i:s');
            \DB::table('orders')->insert(
                [
                    [
                        'id' => $i,
                        'user_id' => 1,
                        'store_id' => 1,
                        'transaction_id' => '8UY59224GP500912R',
                        'customer_email' => 'user@gmail.com',
                        'customer_phone' => null,
                        'customer_first_name' => 'Test user',
                        'customer_last_name' => null,
                        'billing_info' => '{"id": 1, "zip": 555555, "city": "Recife", "email": "user@gmail.com", "phone": "+55 (81) 1111-1111", "state": "PE", "address": "address", "country": "Brasil", "user_id": 1, "last_name": "Test", "created_at": "2025-09-07T06:54:52.000000Z", "first_name": "User", "is_default": 1, "updated_at": "2025-09-07T06:54:52.000000Z"}',
                        'shipping_info' => null,
                        'has_coupon' => 0,
                        'coupon' => null,
                        'discount' => null,
                        'shipping_charge' => 30,
                        'total' => 1657.0,
                        'payment_method' => 'PayPal',
                        'currency' => 'BRL',
                        'currency_icon' => null,
                        'currency_rate' => 1,
                        'order_status' => 'pending',
                        'payment_status' => 'paid',
                        'created_at' => $date,
                        'updated_at' => '2025-09-07 07:26:49',
                    ]
                ]
            );

            \DB::table('order_products')->insert(
                [
                    [
                        'order_id' => $i,
                        'product_id' => 1,
                        'product_name' => 'Nike Tênis masculino Air Jordan 1 Mid',
                        'unit_price' => 1657.0,
                        'variant' => null,
                        'quantity' => 1,
                        'created_at' => $date,
                        'updated_at' => '2025-09-07 07:26:49',
                    ],
                ]
            );

            \DB::table('admin_commissions')->insert([
                'order_id' => $i,
                'commission_rate' => 15,
                'commission_amount' => 50,
                'created_at' => $date,
            ]);
        }
    }
}
