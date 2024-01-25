<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Download extends Model
{
    use HasFactory;
    protected $fillable = ['music_id','donloads','title'];

    public function music(): HasMany
    {
        return $this->hasMany(Music::class, 'music_id');
    }
}
