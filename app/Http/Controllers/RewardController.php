<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;

class RewardController extends Controller
{
    public function getAllReward()
    {
        return response()->json([
            'success' => true,
            'data' => Reward::all(),
            'message' => 'getting reward data'
        ], 200);
    }

    public function getUserRewards(Int $user_id)
    {
        $data =  RewardsCompleted::where('user_id', $user_id)->latest()->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'getting user reward data'
        ], 200);
    }

    
}
