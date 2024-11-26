<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    use HasFactory;

    protected $table = 'actors_movies';

    protected $fillable = [
        'actor_id',
        'movie_id',
        'character',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
