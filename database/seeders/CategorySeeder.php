<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Membaca',
                'description' => 'Kategori yang menekankan kemampuan membaca huruf dan kata dalam bahasa arab',
                'image' => 'public\image\Hadiah_reward\anak pegang banner.jpg'
            ], [
                'name' => 'Mendengarkan',
                'description' => 'Kategori yang menekankan kemampuan mendengarkan pelafalan huruf dan kata dalam bahasa arab',
                'image' => 'public\image\Hadiah_reward\anak_sikat_gigi.jpg'
            ], 
        ];

        Category::insert($data);
    }
}
