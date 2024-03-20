<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const MAX_TITLE_LENGTH = 100;

    public const MAX_CONTENT_LENGTH = 1000;

    protected $fillable = [
        'title',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }
}
