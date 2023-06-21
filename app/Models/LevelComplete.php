<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelComplete extends Model
{
    use HasFactory;

    protected $fillable = ['status'];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
