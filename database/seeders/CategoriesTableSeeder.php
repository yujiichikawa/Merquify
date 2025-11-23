<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1, 'parent_id' => null,
                'name' => 'Eletrônicos', 'slug' => 'eletronicos',
                'position' => 0,
                'image' => 'uploads/3b5eec73-3fc2-4bba-a267-989351e604ed.png',
                'icon' => 'uploads/be9e52e8-416e-46a5-81c1-f60fc536a3cf.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:32:01', 'updated_at' => '2025-09-07 00:45:50'
            ],
            [
                'id' => 2, 'parent_id' => 3,
                'name' => 'Canon', 'slug' => 'canon',
                'position' => 0,
                'image' => null,
                'icon' => 'uploads/c46df604-66c5-41d0-89cc-df61d7387c55.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:35:14', 'updated_at' => '2025-09-03 05:02:52'
            ],
            [
                'id' => 3, 'parent_id' => 1,
                'name' => 'Câmera', 'slug' => 'camera',
                'position' => 0,
                'image' => 'uploads/27189eda-f713-423f-8903-efebfc20f7da.png',
                'icon' => 'uploads/1dc73d85-d50a-4e13-a6c9-589f845f3bd4.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:35:34', 'updated_at' => '2025-09-07 00:45:19'
            ],
            [
                'id' => 4, 'parent_id' => 3,
                'name' => 'DJI', 'slug' => 'dji',
                'position' => 1,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:36:05', 'updated_at' => '2025-09-03 04:36:07'
            ],
            [
                'id' => 5, 'parent_id' => 3,
                'name' => 'GoPro', 'slug' => 'gopro',
                'position' => 2,
                'image' => null,
                'icon' => 'uploads/2c8a0ddd-dd03-4481-8406-c76af5caa8b2.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:36:14', 'updated_at' => '2025-09-09 05:47:24'
            ],
            [
                'id' => 6, 'parent_id' => 3,
                'name' => 'Pentax', 'slug' => 'pentax',
                'position' => 3,
                'image' => null,
                'icon' => 'uploads/59b5304e-d9bc-4b36-86f4-a3009d074889.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:36:22', 'updated_at' => '2025-09-09 05:47:24'
            ],
            [
                'id' => 7, 'parent_id' => 1,
                'name' => 'Notebooks', 'slug' => 'notebooks',
                'position' => 1,
                'image' => null,
                'icon' => 'uploads/fab2c2db-f815-45c6-8b5d-9d10488a720f.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:36:54', 'updated_at' => '2025-09-03 05:03:17'
            ],
            [
                'id' => 8, 'parent_id' => 7,
                'name' => 'Acer', 'slug' => 'acer',
                'position' => 0,
                'image' => null,
                'icon' => 'uploads/fc5b2048-6fe6-4ab8-b7f9-01715b317761.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:36:58', 'updated_at' => '2025-09-03 05:03:20'
            ],
            [
                'id' => 9, 'parent_id' => 7,
                'name' => 'ASUS', 'slug' => 'asus',
                'position' => 1,
                'image' => null,
                'icon' => 'uploads/30e96203-cc15-45ed-9229-dc3ef7fbc737.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:08', 'updated_at' => '2025-09-03 05:03:21'
            ],
            [
                'id' => 10, 'parent_id' => 7,
                'name' => 'Lenovo', 'slug' => 'lenovo',
                'position' => 2,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:23', 'updated_at' => '2025-09-03 04:37:29'
            ],
            [
                'id' => 11, 'parent_id' => 7,
                'name' => 'MSI', 'slug' => 'msi',
                'position' => 3,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:27', 'updated_at' => '2025-09-03 04:37:30'
            ],
            [
                'id' => 12, 'parent_id' => 1,
                'name' => 'Smartphones', 'slug' => 'smartphones',
                'position' => 2,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:36', 'updated_at' => '2025-09-03 04:40:21'
            ],
            [
                'id' => 13, 'parent_id' => 12,
                'name' => 'Google Pixel', 'slug' => 'google-pixel',
                'position' => 0,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:45', 'updated_at' => '2025-09-03 04:37:47'
            ],
            [
                'id' => 14, 'parent_id' => 12,
                'name' => 'OnePlus', 'slug' => 'one-plus',
                'position' => 1,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:37:55', 'updated_at' => '2025-09-03 04:37:57'
            ],
            [
                'id' => 15, 'parent_id' => 12,
                'name' => 'Samsung', 'slug' => 'samsung',
                'position' => 2,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:01', 'updated_at' => '2025-09-03 04:38:03'
            ],
            [
                'id' => 16, 'parent_id' => 12,
                'name' => 'Sony Xperia', 'slug' => 'sony-xperia',
                'position' => 3,
                'image' => null, 'icon' => null,
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:09', 'updated_at' => '2025-09-03 04:38:11'
            ],
            [
                'id' => 17, 'parent_id' => null,
                'name' => 'Moda Masculina', 'slug' => 'moda-masculina',
                'position' => 1,
                'image' => 'uploads/2fb70ef8-d066-483b-8c02-7c64863410af.png',
                'icon' => 'uploads/594f54b7-0fbb-4992-a06c-d41474092c17.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:22', 'updated_at' => '2025-09-03 21:29:16'
            ],
            [
                'id' => 18, 'parent_id' => null,
                'name' => 'Moda Feminina', 'slug' => 'moda-feminina',
                'position' => 2,
                'image' => 'uploads/fa81231b-5dbc-49b4-8f02-03287c771ba1.png',
                'icon' => 'uploads/85ceb625-d7cd-422a-b99a-8a140314d61c.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:27', 'updated_at' => '2025-09-03 21:30:02'
            ],
            [
                'id' => 19, 'parent_id' => null,
                'name' => 'Calçados', 'slug' => 'calçados',
                'position' => 3,
                'image' => 'uploads/93223fc5-7425-4e7b-a370-4e1cf00125e2.png',
                'icon' => 'uploads/c2b0b24c-d51c-482c-9749-9c1bb627468b.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:30', 'updated_at' => '2025-09-03 21:31:07'
            ],
            [
                'id' => 20, 'parent_id' => null,
                'name' => 'Saúde e Beleza', 'slug' => 'saude-e-beleza',
                'position' => 4,
                'image' => 'uploads/eb1c089a-76d3-4b07-af1e-ade1199c5343.png',
                'icon' => 'uploads/86269725-261b-4ee2-9fae-22253b134484.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:39', 'updated_at' => '2025-09-03 21:31:20'
            ],
            [
                'id' => 21, 'parent_id' => null,
                'name' => 'Casa e Vida', 'slug' => 'casa-e-vida',
                'position' => 6,
                'image' => 'uploads/82604c69-1de9-467f-9b0a-d9c6e53d7bfd.png',
                'icon' => 'uploads/7f835a2b-d313-4409-8f1c-1bfcbdd3c83e.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:38:55', 'updated_at' => '2025-09-03 05:23:29'
            ],
            [
                'id' => 22, 'parent_id' => null,
                'name' => 'Esportes e Lazer', 'slug' => 'esportes-e-lazer',
                'position' => 7,
                'image' => null,
                'icon' => 'uploads/003cdd64-a660-4ed7-a15e-4db56d35ab0f.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:39:01', 'updated_at' => '2025-09-03 05:00:39'
            ],
            [
                'id' => 23, 'parent_id' => null,
                'name' => 'Automotivo', 'slug' => 'automotivo',
                'position' => 8,
                'image' => null,
                'icon' => 'uploads/c6c59900-262b-4a2e-8065-55b554c690fe.svg',
                'is_featured' => 0, 'is_active' => 1,
                'created_at' => '2025-09-03 04:39:05', 'updated_at' => '2025-09-03 05:00:45'
            ],
            [
                'id' => 24, 'parent_id' => null,
                'name' => 'Video Games', 'slug' => 'video-games',
                'position' => 10,
                'image' => 'uploads/abb62b4f-bbde-4524-bcd2-1ad5ef638b93.png',
                'icon' => 'uploads/75c1be1c-0a14-4cc3-af95-fb0a6a0cdb21.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:42:39', 'updated_at' => '2025-09-03 05:28:47'
            ],
            [
                'id' => 25, 'parent_id' => null,
                'name' => 'Livros', 'slug' => 'livros',
                'position' => 11,
                'image' => 'uploads/80d9cc81-e260-4b3e-8e94-4deb0409612b.png',
                'icon' => 'uploads/ab5fbebf-8e07-43c1-85b5-ab0880ffabd3.svg',
                'is_featured' => 1, 'is_active' => 1,
                'created_at' => '2025-09-03 04:42:52', 'updated_at' => '2025-09-03 21:33:47'
            ],
        ];
        DB::table('categories')->insert($categories);

    }
}
