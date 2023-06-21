<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Level extends Model
{
    use HasFactory;

    public function Question(){
        return $this->hasMany(Question::class, 'level_id');
    }

    public function Answer(){
        return $this->hasMany(Answer::class, 'level_id');
    }

    public function Course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function completed()
    {
        $id = 0;
        if (Auth::check()) {
            $id = Auth::user()->id;
        }
        return $this->hasOne(LevelComplete::class, 'level_id', 'id')->where('user_id', $id);
    }

    public function Rewards()
    {
        return $this->hasOne(Reward::class, 'level_id', 'id');
    }
}
