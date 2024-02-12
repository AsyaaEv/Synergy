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
    public $nama_panggilan;
    public $jabatan;
    public $deskripsi;
    public $ttl;
    public $ig;
    public $fb;
    public $mapel;
    public $kode;
    public $nip;
    public $email;
    public $foto;
    public $fotoName;
    public function save()
    {
        $namaArray = explode(' ', $this->nama);
        if(count($namaArray) > 1){
            $nama_panggilan = $namaArray[1];
        } else {
            $nama_panggilan = $namaArray[0];
        }

        $input = $this->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'ttl' => 'required',
            'mapel' => 'required',
            'kode' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'foto' => 'max:1020',
        ]);

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
        if($this->deskripsi == null) {
            $desc = '';
        } else {
            $desc = $this->deskripsi;
        }

        $post = new Guru();
        $post->nama = $this->nama;
        $post->nama_panggilan = $nama_panggilan;
        $post->jabatan = $this->jabatan;
        $post->deskripsi = $desc;
        $post->ttl = $this->ttl;
        $post->ig = $ig;
        $post->fb = $fb;
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
            session()->flash('alert', 'success');
            return redirect('/dashboard/guru');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'bg-red-300');
        }
    }

    
}
