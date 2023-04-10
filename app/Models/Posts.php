<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'images'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
