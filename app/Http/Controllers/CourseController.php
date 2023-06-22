<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\LevelComplete;

class CourseController extends Controller
{
    public function all_course(int $category) {
        $course = Course::where('category_id', $category)->get();

        if ($course != null){
            $response = [
                'success' => true,
                'data' => $course,
                'message' => 'Getting Course Data'
            ];
            return response()->json($response, 200);
        }else {
            $response = [
                'success' => false,
                'message' => 'No Course found'
            ];
            return response()->json($response, 200);
        }
    }

    public function course_detail (int $cate_id, int $id) {
        $details = Course::where('category_id', $cate_id)->with('User', 'Level')->find($id);

        // foreach ($details->level as $level) {
        //     $level_check = LevelComplete::where('course_id', $id)->where('level_id', $level->id)->where('user_id', Auth::id())->first();
            
        //     if ($level->name == "Level 1"){
        //         $level->is_lock = 0;
        //     }


        //     if ($level_check && $level_check->status == 1){
        //         $level->complete = 1;
        //         $level->is_lock = 1;

        //     }else if ($level_check->status == 0){
        //         $level->complete = 0;
        //     }else {
        //         $level_complete = new LevelComplete();

        //     }
        // }


        if ($details){
            for ($i=0; $i < count($details->level) ; $i++) { 
                $level_check = LevelComplete::where('course_id', $id)->where('level_id', $details->level[$i]->id)->where('user_id', Auth::id())->first();
    
                if ($details->level[$i]->name == "level 1"){
                    $details->level[$i]->is_lock = 0;
                }
    
                if($level_check && $level_check->status == 1){
                    $details->level[$i]->is_lock = 2;
                    
                    if ( $i != count($details->level)-1){
                        $details->level[$i+1]->is_lock = 0;
                    }
                    
                }else if(!$level_check){
                    $level_complete = new LevelComplete();
                    $level_complete->category_id = $details->category_id;
                    $level_complete->course_id = $details->id;
                    $level_complete->level_id = $details->level[$i]->id;
                    $level_complete->user_id = Auth::id();
                    $level_complete->skor = 0;
                
                    $level_complete->save();
                }
            }
    
            $progress = LevelComplete::where('course_id', $id)->where('user_id', Auth::id())->where('status', 1)->get();
            $details->progress = ceil ( count($progress) / $details->level_count * 100 );

            $response = [
                'success' => true,
                'data' => $details,
                'message' => 'Getting Course Details'
            ];
            return response()->json($response, 200);
        }else {
            $response = [
                'success' => false,
                'message' => 'Course Details not found'
            ];
            return response()->json($response, 200);
        }
    }
}
