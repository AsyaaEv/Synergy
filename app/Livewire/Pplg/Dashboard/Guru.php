<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru as ModelsGuru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Guru extends Component
{
    public $search;
    public $nama;
    public $mapel;
    public $kode;
    public $nip;
    public $email;
    public $data;
    public $foto;
    use WithFileUploads;

    public function render()
    {
        $guru = ModelsGuru::where('nama', 'like', '%'. $this->search. '%')->orderBy('id', 'desc')->get();
        return view('livewire.pplg.dashboard.guru', compact('guru'));
    }

    public function hapusGuru($id){
        $this->data = ModelsGuru::find($id);
        $this->foto = $this->data->foto;
        if ($this->data->foto != 'no_profile.webp') {
            Storage::delete('public/'.$this->foto);
        }
        $this->data->delete();
    }
}
