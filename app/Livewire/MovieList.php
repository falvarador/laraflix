<?php

namespace App\Livewire;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class MovieList extends Component
{
    public $type = 'trending';

    #[On('toggled-favorite')]
    public function refreshMovies()
    {
        $this->getMovies();
    }

    public function getMovies()
    {
        if ($this->type === 'trending') {
            return Movie::all();
        }

        return Auth::user()->favoriteMovies()->get();
    }

    public function render()
    {
        return view('livewire.movie-list')->with([
            'movies' => $this->getMovies(),
            'type' => $this->type,
        ]);
    }
}
