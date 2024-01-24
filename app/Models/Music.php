<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'artist'
    ];
}
