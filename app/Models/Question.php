<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function Option(){
        return $this->hasMany(Answer::class, 'question_id');
    }

    public function Level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
    
}
