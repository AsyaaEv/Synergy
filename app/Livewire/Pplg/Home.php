<?php

namespace App\Livewire\Pplg;

use App\Models\Guru;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $guru = Guru::all();
        return view('livewire.pplg.home', compact('guru'));
    }
}
