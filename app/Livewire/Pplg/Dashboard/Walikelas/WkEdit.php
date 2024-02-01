<?php

namespace App\Livewire\Pplg\Dashboard\Walikelas;

use App\Models\Wali;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class WkEdit extends Component
{
    
    public function render()
    {
        $this->data = Wali::find($this->id);
        $this->nama_lengkap = $this->data->nama_lengkap;
        $this->nama_panggilan = $this->data->nama_panggilan;
        $this->mapel = $this->data->mapel;
        $this->ttl = $this->data->ttl;
        $this->ig = $this->data->ig;
        $this->fb = $this->data->fb;
        $this->kode = $this->data->kode;
        $this->nip = $this->data->nip;
        $this->type = $this->data->guru;
        $this->foto = $this->data->foto;
        $this->walikelas = $this->data->walikelas;
        return view('livewire.pplg.dashboard.walikelas.wk-edit');
    }

    use WithFileUploads;
    public $foto;
    public $fotoNew;
    public $id;
    public $data;
    public $nama_lengkap;
    public $nama_panggilan;
    public $mapel;
    public $kode;
    public $type;
    public $nip;
    public $walikelas;
    public $ttl;
    public $ig;
    public $fb;
    public function edit(){
        if($this->ig == null){
            $ig = '';
        } else {
            $ig = $this->ig;
        }
        if($this->fb == null){
            $fb = '';
        } else {
            $fb = $this->fb;
        }
        $post = $this->data;
        $post->nama_lengkap = $this->nama_lengkap;
        $post->nama_panggilan = $this->nama_panggilan;
        $post->kode = $this->kode;
        $post->ig = $ig;
        $post->fb = $fb;
        $post->mapel = $this->mapel;
        $post->nip = $this->nip;
        $post->guru = $this->type;
        $post->walikelas = $this->walikelas;

        if($this->fotoNew == null){
            $post->foto = $this->foto;
        } else {
            Storage::delete('public/'.$this->foto);
            $gambar = $this->fotoNew->store('walikelas', 'public');
            $post->foto = $gambar; 
        }

        try{
            $post->update();
            session()->flash('msg', 'Walikelas ' . $this->nama_lengkap . ' berhasil diperbarui');
            session()->flash('alert', 'success');
            return redirect('/dashboard/walikelas');            
        } catch (\Throwable $th){
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
