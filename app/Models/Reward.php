<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'keterangan'
    ];

    public function Level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }
}
