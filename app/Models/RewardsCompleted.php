<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class RewardsCompleted extends Model
{
    use HasFactory;
    
    protected $fillable = ['status', 'skor'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
