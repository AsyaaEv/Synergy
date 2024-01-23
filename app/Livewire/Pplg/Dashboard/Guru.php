<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru as ModelsGuru;
use Livewire\Component;

class Guru extends Component
{
    public function render()
    {
        $guru = ModelsGuru::all();
        return view('livewire.pplg.dashboard.guru', compact('guru'));
    }
}
