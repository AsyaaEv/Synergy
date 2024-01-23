<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru as ModelsGuru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Guru extends Component
{
    public function render()
    {
        $guru = ModelsGuru::all();
        return view('livewire.pplg.dashboard.guru', compact('guru'));
    }

    public $data;
    public $foto;
    public function hapusGuru($id){
        $this->data = ModelsGuru::find($id);
        $this->foto = $this->data->foto;
        if ($this->data->foto != 'no_profile.webp') {
            Storage::delete('public/'.$this->foto);
        }
        $this->data->delete();
    }
}
