<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TarotCard extends Model
{
    protected $appends = ['image_url'];

    protected $fillable = [
        'name',
        'arcana',
        'number',
        'description',
        'meaning',
        'message',
        'image',
        'keywords',
    ];

    protected function casts(): array
    {
        return [
            'keywords' => 'array',
        ];
    }

    public function getImageUrlAttribute(): string
    {
        return Storage::url($this->image);
    }
}
