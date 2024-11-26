<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieLanguage extends Model
{
    use HasFactory;

    protected $table = 'movies_languages';

    protected $fillable = [
        'code',
        'short_description',
    ];

    protected $hidden = ['movie_id', 'id', 'created_at', 'updated_at'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
