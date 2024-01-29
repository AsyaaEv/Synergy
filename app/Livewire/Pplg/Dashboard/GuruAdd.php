<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Livewire\Component;
use Livewire\WithFileUploads;

class GuruAdd extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('livewire.pplg.dashboard.guru-add');
    }
    
    public $nama;
    public $mapel;
    public $kode;
    public $nip;
    public $email;
    public $foto;
    public $fotoName;
    public function save()
    {
        $input = $this->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'kode' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'foto' => 'max:1020',
        ]);

        $post = new Guru();
        $post->nama = $this->nama;
        $post->mapel = $this->mapel;
        $post->kode = $this->kode;
        $post->nip = $this->nip;
        $post->email = $this->email;
        if($this->foto == null){
            $post->foto = 'no_profile.webp';
        } else {
            $data = $this->foto->store('guru', 'public');
            $post->foto = $data;
        }
        try {
            $post->save();
            session()->flash('msg', __('Guru Berhasil ditambahkan'));
            session()->flash('alert', 'blue-300');
            return redirect('/dashboard/guru');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'bg-red-300');
        }
    }

    
}
