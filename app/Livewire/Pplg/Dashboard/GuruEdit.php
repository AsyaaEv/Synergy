<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class GuruEdit extends Component
{
    public $id;
    public $nama;
    public $kode;
    public $mapel;
    public $nip;
    public $email;
    public $foto;
    public $fotoNew;
    public $guru;
    use WithFileUploads;
    public function render()
    {
        $this->guru = Guru::find($this->id);
        $this->nama = $this->guru->nama;
        $this->kode = $this->guru->kode;
        $this->mapel = $this->guru->mapel;
        $this->nip = $this->guru->nip;
        $this->email = $this->guru->email;  
        $this->foto = $this->guru->foto;  
        return view('livewire.pplg.dashboard.guru-edit');
    }

    public function edit(){
        
        $post = $this->guru;
        $post->nama = $this->nama;
        $post->kode = $this->kode;
        $post->mapel = $this->mapel;
        $post->nip = $this->nip;
        $post->email = $this->email;
        if($this->fotoNew == null){
            $post->foto = $this->foto;
        } else {
            Storage::delete('public/'.$this->foto);
            $gambar = $this->fotoNew->store('guru', 'public');
            $post->foto = $gambar; 
        }

        try{
            $post->update();
            session()->flash('msg', 'Guru ' . $this->nama . ' berhasil diperbarui');
            session()->flash('alert', 'success');
            return redirect('/dashboard/guru');            
        } catch (\Throwable $th){
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
