<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function level(){
        return $this->hasMany(Level::class, 'course_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id')->withDefault([
            'name' => ' '
        ]);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Complete()
    {
        if (Auth::check()) {
            return $this->hasMany(LevelComplete::class)->where('user_id', Auth::user()->id);

        } else {
            return $this->hasMany(LevelComplete::class)->whereNull('user_id');

        }
    }
}
