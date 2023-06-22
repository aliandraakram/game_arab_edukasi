<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use App\Models\LevelComplete;


class LeaderboardCon extends Controller
{
    public function getLeaderboard(Int $cat_id, Int $cou_id)
    {
        if ($cat_id == 0 && $cou_id == 0){
            $ranking = User::orderBy('total_skor', 'desc')->get();

            $response = [
                'succes' => true,
                'data' => [
                    'category' => "",
                    'course' => "",
                    'ranking' => $ranking
                ],
                'message' => 'Getting Leaderboard data'
            ];

            return response()->json($response, 200);
        }else if ($cat_id != 0){
            $leaderboard_data = LevelComplete::where('category_id', $cat_id)
                ->groupBy('user_id')
                ->get();

            //$data = $leaderboard_data->map(function ($total)
            // {   
            //     $names = User::where('user_id', $total->user_id)->first();
            //     $total->name = $names->name;
            //     return $total->sum('skor')->orderBy('skor', 'desc');
            // });

            

            $category = Category::find($cat_id);

            $response = [
                'succes' => true,
                'data' => [
                    'category' => $category->name,
                    'course' => "",
                    'ranking' => $leaderboard_data
                ],
                'message' => 'Getting Leaderboard data'
            ];

            return response()->json($response, 200);
        }else {
            $leaderboard_data = LevelComplete::where('category_id', $cat_id)
                ->where('course_id', $cou_id)
                ->groupBy('user_id')
                ->get();
            //$data = $leaderboard_data->map(function ($total)
            // {
            //     $names = User::where('user_id', $total->user_id)->first();
            //     $total->name = $names->name;
            //     return $total->sum('skor');
            // });

            $category = Category::find($cat_id);
            $course = Course::find($cou_id);

            $response = [
                'succes' => true,
                'data' => [
                    'category' => $category->name,
                    'course' => $course->title,
                    'ranking' => $data
                ],
                'message' => 'Getting Leaderboard data'
            ];
        }
    }
}
