<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
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
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 1,
                'course_id' => 3,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 1,
                'course_id' => 3,
                'name' => 'level 3',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 1,
                'course_id' => 4,
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 1,
                'course_id' => 4,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 1,
                'course_id' => 4,
                'name' => 'level 3',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 1,
                'course_id' => 5,
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 1,
                'course_id' => 5,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 1,
                'course_id' => 5,
                'name' => 'level 3',
                'question_count' => 5,
                'time' => 300,
                ],   [
                'category_id' => 2,
                'course_id' => 6,
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 2,
                'course_id' => 6,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 2,
                'course_id' => 7,
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 2,
                'course_id' => 7,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ],  [
                'category_id' => 2,
                'course_id' => 8,
                'name' => 'level 1',
                'question_count' => 5,
                'time' => 300,
                ], [
                'category_id' => 2,
                'course_id' => 8,
                'name' => 'level 2',
                'question_count' => 5,
                'time' => 300,
                ],     
            ];
        Level::insert($data);
      
    }
}
