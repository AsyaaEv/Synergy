<?php

namespace App\Livewire\Pplg;

use App\Models\Guru;
use Livewire\Component;

class ProfilGuru extends Component
{
    public $nama;
    public function render()
    {
        $data = Guru::where('nama', $this->nama)->get();
        return view('livewire.pplg.profil-guru', compact('data'));
    }
}
