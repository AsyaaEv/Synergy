<?php

namespace App\Livewire\Pplg\Dashboard\Kelas;

use App\Models\Kelas;
use App\Models\Wali;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Kelas::all();
        return view('livewire.pplg.dashboard.kelas.index', compact('data'));
    }
}
