<?php

namespace App\Livewire\Pplg\Dashboard\Walikelas;

use App\Models\Wali;
use Livewire\Component;
use Livewire\WithFileUploads;

class WkAdd extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('livewire.pplg.dashboard.walikelas.wk-add');
    }

    public $nama;
    public $mapel;
    public $kode;
    public $nip;
    public $foto;
    public $type;
    public $walikelas;
    public function saveWK()
    {
        
        $input = $this->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'kode' => 'required',
            'nip' => 'required',
            'type' => 'required',
            'foto' => 'max:1020',
        ]);

        $post = new Wali();
        $post->nama = $this->nama;
        $post->mapel = $this->mapel;
        $post->kode = $this->kode;
        $post->nip = $this->nip;
        $post->guru = $this->type;
        $post->walikelas = '--';
        if($this->foto == null){
            $post->foto = 'no_profile.webp';
        } else {
            $data = $this->foto->store('walikelas', 'public');
            $post->foto = $data;
        }
        
        try {
            $post->save();
            session()->flash('msg', __('Guru Berhasil ditambahkan'));
            session()->flash('alert', 'blue-300');
            return redirect('/dashboard/walikelas');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'bg-red-300');
        }
    }
}
