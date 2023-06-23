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
        if ($cat_id != 0 && $cou_id != 0){
            $leaderboard_data = LevelComplete::where('category_id', $cat_id)
                ->where('course_id', $cou_id)
                ->where('status', 1)
                ->get();

            $collection = $leaderboard_data->groupBy('user_id')->map(function ($row) {
                return $row->sum('skor');
            });

            $ranking = [];

            foreach ($collection as $item_id => $item_skor){
                $user = User::where('id', $item_id)->first();

                array_push($ranking, ['nama' => $user->name, 'skor' => $item_skor]);
            }

            $sortedRanking = collect($ranking)->sortByDesc('skor')->values();

            $category = Category::find($cat_id);
            $course = Course::find($cou_id);

            $response = [
                'succes' => true,
                'data' => [
                    'category' => $category->name,
                    'course' => $course->title,
                    'ranking' => $sortedRanking
                ],
                'message' => 'Getting Leaderboard data'
            ];
            return response()->json($response, 200);
            
        }else if ($cat_id != 0){
            $leaderboard_data = LevelComplete::where('category_id', $cat_id)->where('status', 1)
                ->get();

            //$data = $leaderboard_data->map(function ($total)
            // {   
            //     $names = User::where('user_id', $total->user_id)->first();
            //     $total->name = $names->name;
            //     return $total->sum('skor')->orderBy('skor', 'desc');
            // });

            $collection = $leaderboard_data->groupBy('user_id')->map(function ($row) {
                return $row->sum('skor');
            });

            $ranking = [];

            foreach ($collection as $item_id => $item_skor) {
                $user = User::where('id', $item_id)->first();

                array_push($ranking, ['nama' => $user->name, 'skor' => $item_skor]);

                // $ranking = [
                //     'nama' => $user->name,
                //     'skor' => $item_skor
                // ];
            }

            $sortedRanking = collect($ranking)->sortByDesc('skor')->values();

            $category = Category::find($cat_id);

            $response = [
                'succes' => true,
                'data' => [
                    'category' => $category->name,
                    'course' => "",
                    'ranking' => $sortedRanking
                ],
                'message' => 'Getting Leaderboard data'
            ];

            return response()->json($response, 200);
        }else {
            $user = User::all();

            $ranking = [];
            foreach ($user as $item){
                array_push($ranking, ['nama' => $item->name, 'skor' => $item->total_skor]);
            }

            $sortedRanking = collect($ranking)->sortByDesc('skor')->values();

            $response = [
                'succes' => true,
                'data' => [
                    'category' => "",
                    'course' => "",
                    'ranking' => $sortedRanking
                ],
                'message' => 'Getting Leaderboard data'
            ];

            return response()->json($response, 200);
        }
    }
}
