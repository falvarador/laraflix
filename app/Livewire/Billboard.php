<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Billboard extends Component
{
    public function render()
    {
        return view('livewire.billboard')->with('movie', Movie::inRandomOrder()->first());
    }
}
