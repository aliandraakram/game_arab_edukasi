<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LeaderboardCon;
use App\Http\Controllers\RewardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Authentication
Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signUp']);
Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);

//Course
Route::get('/all-course/{category}', [CourseController::class, 'all_course']);
Route::middleware('auth:sanctum')->get('/course/{category_id}/{id}', [CourseController::class, 'course_detail']);
Route::middleware('auth:sanctum')->get('/level/{id}/{course_id}', [LevelController::class, 'getLevelData']);
Route::middleware('auth:sanctum')->get('/submit/{level_id}/{course_id}', [LevelController::class, 'submitAnswer']);
Route::middleware('auth:sanctum')->get('/course/{category}', 'CourseController@all_course');

//Reward
Route::middleware('auth:sanctum')->get('/reward', [RewardController::class, 'getAllReward']);
Route::middleware('auth:sanctum')->get('/reward/{id}', [RewardController::class, 'getUserReward']);

//Leaderboard
Route::middleware('auth:sanctum')->get('/leaderboard/{cat_id}/{cou_id}', [LeaderboardCon::class, 'getLeaderboard']);

//profile
Route::middleware('auth:sanctum')->get('/profile', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->post('/edit-profile', [UserController::class, 'editProfile']);
Route::middleware('auth:sanctum')->post('/edit-profile-image', [UserController::class, 'editProfilePic']);
