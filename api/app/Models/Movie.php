<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'rating',
        'poster',
        'genre',
        'director_id',
    ];

    protected $hidden = ['poster', 'created_at', 'updated_at']; 

    protected $attributes = [
        'rating' => 0.0,
    ];

    public function movieLanguage($languageCode = 'en')
    {
        return $this->hasMany(MovieLanguage::class)->where('code', $languageCode);
    }

    public function movieLanguageAll()
    {
        return $this->hasMany(MovieLanguage::class);
    }
}
