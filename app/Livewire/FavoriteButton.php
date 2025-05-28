<?php

namespace App\Livewire;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoriteButton extends Component
{
    public $movie;

    public function toggleFavorite(Movie $movie)
    {
        Auth::user()->favoriteMovies()->toggle($movie);

        $this->dispatch('toggled-favorite');
    }

    public function render()
    {
        return view('livewire.favorite-button')->with("movie", $this->movie);
    }
}
