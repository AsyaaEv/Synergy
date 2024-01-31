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
        
        // $namapendek = $this->nama;
        $namaArray = explode(' ', $this->nama);
        if(count($namaArray) > 1){
            $namapendek = $namaArray[1];
        } else {
            $namapendek = $namaArray[0];
        }


        $input = $this->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'kode' => 'required',
            'nip' => 'required',
            'type' => 'required',
            'foto' => 'max:1020',
        ]);

        $post = new Wali();
        $post->nama_lengkap = $this->nama; 
        $post->nama_panggilan = $namapendek; 
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
            session()->flash('msg', __('Kelas Berhasil ditambahkan'));
            session()->flash('alert', 'success');
            return redirect('/dashboard/walikelas');
            dd('asdasd');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'bg-red-300');
        }
    }
}
