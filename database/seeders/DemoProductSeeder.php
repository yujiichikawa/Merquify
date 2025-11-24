<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'store_id' => 1,
            'product_type' => 'physical',
            'brand_id' => 2,
            'name' => 'Nike Tênis masculino Air Jordan 1 Mid',
            'slug' => 'nike-tênis-masculino-air-jordan-1-mid',
            'price' => 1657.0,
            'description' => ' Detalhes do produto

                                Material da sola
                                Borracha
                                Material externo
                                O couro genuíno no cabedal oferece durabilidade, estrutura e uma sensação premium.
                                Tipo de fecho
                                Cadarço

                                Sobre este item

                                Cabedal de couro durável: oferece estrutura e uma sensação premium
                                Absorção de impacto: a tecnologia Nike Air amortece cada passo
                                Amortecimento leve: espuma macia na entressola
                                Tração durável: sola de borracha para aderência
                                Código de estilo: HJ6654-071',
            'manage_stock' => 'yes',
            'qty' => '5',
            'in_stock' => 1,
            'status' => 'active',
            'approved_status' => 'approved',
            'is_featured' => 0,
            'is_hot' => 0,
            'is_new' => 1,
            'created_at' => '2025-11-24 21:58:42'
        ]);

        DB::table('category_product')->insert([
            [
                'category_id' => 19,
                'product_id' => 1,
                'created_at' => '2025-11-24 21:58:42'
            ]
        ]);
        DB::table('product_tag')->insert([
            [
                'product_id' => 1,
                'tag_id' => 2,
                'created_at' => '2025-11-24 21:58:42'
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'uploads/demoproduto01.jpg',
                'order' => '1',
                'created_at' => '2025-11-24 21:58:42'
            ],
            [
                'product_id' => 1,
                'path' => 'uploads/demoproduto02.jpg',
                'order' => '1',
                'created_at' => '2025-11-24 21:58:42'
            ],
            [
                'product_id' => 1,
                'path' => 'uploads/demoproduto03.jpg',
                'order' => '1',
                'created_at' => '2025-11-24 21:58:42'
            ]
        ]);
    }
}
