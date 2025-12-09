<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'label',
        'slug',
        'url',
        'description',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'github',
    ];

    protected function casts(): array
    {
        return [
            'label' => 'text',
            'slug' => 'text',
            'url' => 'text',
            'description' => 'text',
            'website' => 'text',
            'facebook' => 'text',
            'twitter' => 'text',
            'linkedin' => 'text',
            'youtube' => 'text',
            'github' => 'text',
        ];
    }
}
