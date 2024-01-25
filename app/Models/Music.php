<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Music extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'tags',
        'path_cover',
        'path_music',
        'category',
        'artist',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
}
