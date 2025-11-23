<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'id' => 1,
                'name' => 'Edição Limitada',
                'slug' => 'ediçao-limitada',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:48:32',
                'updated_at' => '2025-09-03 21:48:32'
            ],
            [
                'id' => 2,
                'name' => 'À venda',
                'slug' => 'a-venda',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:48:52',
                'updated_at' => '2025-09-03 21:48:52'
            ],
            [
                'id' => 3,
                'name' => 'Elegante',
                'slug' => 'elegante',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:49:00',
                'updated_at' => '2025-09-03 21:49:00'
            ],
            [
                'id' => 4,
                'name' => 'Mais bem avaliado',
                'slug' => 'mais-bem-avaliado',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:49:09',
                'updated_at' => '2025-09-03 21:49:09'
            ],
            [
                'id' => 5,
                'name' => 'Estiloso',
                'slug' => 'estiloso',
                'is_active' => 1,
                'created_at' => '2025-09-03 21:49:19',
                'updated_at' => '2025-09-03 21:49:19'
            ],
        ];
        DB::table('tags')->insert($tags);

    }
}
