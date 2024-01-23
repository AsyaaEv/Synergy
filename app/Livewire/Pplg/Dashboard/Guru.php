<?php

namespace App\Livewire\Pplg;

use App\Models\Guru as ModelsGuru;
use Livewire\Component;
use Livewire\WithFileUploads;

class Guru extends Component
{
    use WithFileUploads;
    public function render()
    {
        $guru = ModelsGuru::all();
        return view('livewire.pplg.dashboard.guru', compact('guru'));
    }

    public $nama;
    public $mapel;
    public $nip;
    public $email;
    public $foto;
    public function saveGuru()
    {
        $input = $this->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'foto' => 'required',
        ]);

        $post = new ModelsGuru();
        $post->nama = $this->nama;
        $post->mapel = $this->mapel;
        $post->nip = $this->nip;
        $post->email = $this->email;
        $data = $this->foto->store('guru', 'public');
        $post->foto = $data;
        try {
            $post->save();
            session()->flash('msg', __('Guru Berhasil ditambahkan'));
            session()->flash('alert', 'success');
            return redirect('/test');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }

    public function editGuru($id){
        session()->flash('toggle', 'block');
        $data = ModelsGuru::find($id);
        $this->nama = $data->nama;
    }

}
