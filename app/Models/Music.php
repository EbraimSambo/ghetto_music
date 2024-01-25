<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

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
        'user_id',
        'slug',
        'search'
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

    public static function boot()
    {
         parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::orderedUuid();//.'-' .now();
        });

    }


    public function scopeFilter($query, array $filters){
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%' );
        }
        if ($filters['category'] ?? false) {
            $query->where('category', 'like', '%' . request('category') . '%' );
        }
        if ($filters['search'] ?? false) {
            $query->where('search', 'like', '%' . request('search') . '%' );
        }
    }
}
