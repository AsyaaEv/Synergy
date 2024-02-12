<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Livewire\Component;

class GuruView extends Component
{
    public $nama;
    public function render()
    {
        $dataGuru = Guru::where('nama', $this->nama)->first();
        return view('livewire.pplg.dashboard.guru-view', compact('dataGuru'));
    }
}
