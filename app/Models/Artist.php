<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable =['artist'];

    public function music(): HasMany
    {
        return $this->hasMany(Music::class, 'artist_id');
    }
}
