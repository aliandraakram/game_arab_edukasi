<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reward;

class RewardSeeder extends Seeder
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
                'category_id' => 1,
                'course_id' => 3,
                'name' => 'panda dan rubah merah',
                'location' => 'public\image\Hadiah_reward\panda.jpg',
                'keterangan' => ''
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'name' => 'Astronot',
                'location' => 'public\image\Hadiah_reward\astronor.jpg',
                'keterangan' => ''
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'name' => 'Anak sikat gigi',
                'location' => 'public\image\Hadiah_reward\anak_sikat_gigi.jpg',
                'keterangan' => ''
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'name' => 'Badak bercula satu',
                'location' => 'public\image\Hadiah_reward\badak.jpg',
                'keterangan' => ''
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'name' => 'polisi, pemadam kebakaran dan dokter',
                'location' => 'public\image\Hadiah_reward\polisi_pemadam_dokter.jpg',
                'keterangan' => ''
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'name' => 'Anak laki-laki',
                'location' => 'public\image\Hadiah_reward\anak pegang banner.jpg',
                'keterangan' => ''
            ], 
        ];

        Reward::insert($data);
    }
}
