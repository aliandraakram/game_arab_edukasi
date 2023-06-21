<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
                [
                'category_id' => 1,
                'image' => 'public/image/hewan_tumbuhan/kambing.jpg',
                'title' => 'Hewan dan Tumbuhan',
                'difficulty' => "Mudah",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai hewan dan tumbuhan mulai dari anjing, kucing, singa, dan lain-lain'
                ], [
                'category_id' => 1,
                'image' => 'public/image/pekerjaan/astronor.jpg',
                'title' => 'Pekerjaan',
                'difficulty' => "Sedang",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai pekerjaan atau profesi seperti polisi, petani, pedagang, dan lain-lain'
                ],  [
                'category_id' => 1,
                'image' => 'public/image/benda_dirumah/tv.jpg',
                'title' => 'Benda-benda Dirumah',
                'difficulty' => "Mudah",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai benda-benda yang ada dirumah seperti tv, kursi, meja, dan lain-lain'
                ], [
                'category_id' => 2,
                'image' => 'public/image/hewan_tumbuhan/domba.jpg',
                'title' => 'Hewan dan Tumbuhan',
                'difficulty' => "Mudah",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai hewan dan tumbuhan mulai dari anjing, kucing, singa, dan lain-lain'
                ], [
                'category_id' => 2,
                'image' => 'public/image/pekerjaan/astronor.jpg',
                'title' => 'Pekerjaan',
                'difficulty' => "Sedang",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai pekerjaan atau profesi seperti polisi, petani, pedagang, dan lain-lain'
                ],  [
                'category_id' => 2,
                'image' => 'public/image/benda_dirumah/tv.jpg',
                'title' => 'Benda-benda Dirumah',
                'difficulty' => "Mudah",
                'level_count' => 5,
                'description' => 'Pembelajaran ini berisi materi pengetahuan bahasa arab mengenai benda-benda yang ada dirumah seperti tv, kursi, meja, dan lain-lain'
                ],
        ];
        Course::insert($data);
    }
}
