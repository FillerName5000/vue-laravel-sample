<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WriterMovie extends Model
{
    use HasFactory;

    protected $fillable = [
        'writer_id',
        'movie_id',
    ];

    protected $table = 'writers_movies';
}
