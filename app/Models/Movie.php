<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites_movies', 'movie_id', 'user_id');
    }
}
