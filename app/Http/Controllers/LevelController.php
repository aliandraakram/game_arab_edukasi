<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Level;
use App\Models\LevelComplete;
use App\Models\Reward;
use App\Models\RewardsCompleted;
use App\Models\Answer;

class LevelController extends Controller
{
    //

    public function getLevelData(Int $id, Int $course_id)
    {
        $data = Level::where('course_id', $course_id)->with('Question')->find($id);

        
            

        if ($data){
            foreach ($data->question as $question) {
                $answer = Answer::where('course_id', $course_id)->where('level_id', $id)->where('question_id', $question->id)->get();
                $question->answer = $answer;
            }

            $response = [
                'success' => true,
                'data' => $data,
                'message' => 'Getting level data'
            ];

            return response()->json($response, 200);
        }else {
            $response = [
                'success' => false,
                'message' => 'level data not found'
            ];

            return response()->json($response, 200);

        }
        
    }


    public function submitAnswer (Int $level_id, Int $course_id, Request $request)
    {
        $answer = $request->get('right_answer');
        $level = Level::where('id', $level_id)->first();

        //question_count = 5, jumlah jawaban benar harus lebih dari setengah jumlah pertanyaan
        if($answer != 0 && $answer >= 3){
            $level_complete = LevelComplete::where('level_id', $level_id)->where('course_id', $course_id)->where('user_id', Auth::user()->id)->first();

            if (!$level){
                $level_complete = new LevelComplete();
                $level_complete->category_id = $level->category_id;
                $level_complete->course_id = $course_id;
                $level_complete->level_id = $level_id;
                $level_complete->user_id = Auth::user()->id;
            }

            $level_complete->skor = $answer * 20;
            $level_complete->status = 1;
            $level_complete->save();

            if ($level->name == "level 5"){
                $reward = Reward::where('course_id', $course_id)->first();
                $rewardsComplete = RewardsCompleted::where('course_id', $course_id)->where('user_id', Auth::user()->id)->first();

                if (!$rewardsComplete){
                    $rewardsComplete = new RewardsCompleted();
                    $rewardsComplete->category_id = $level->category_id;
                    $rewardsComplete->course_id = $course_id;
                    $rewardsComplete->user_id = Auth::user()->id;
                    $rewardsComplete->name = $reward->name;
                    $rewardsComplete->location = $reward->location;
                    $rewardsComplete->save();
                }
            }else {
                $reward = "";
            }

            $response = [
                'success' => true,
                'data' => [
                    'status' => 'Passed',
                    'right_ans' => $answer,
                    'wrong_ans' => 5 - $answer,
                    'skor' => $level_complete->skor,
                    'reward' => $reward
                ],
                'message' => 'Submit ans Success'
            ];

            return response()->json($response, 200);

        }else {
            $response = [
                'success' => false,
                'data' => [
                    'status' => 'Failed',
                    'right_ans' => $answer,
                    'wrong_ans' => 5 - $answer,
                    'skor' => $answer * 20,
                    'reward' => ""
                ],
                'message' => 'Level failed'
            ];

            return response()->json($response, 200);
        }


    }
}
