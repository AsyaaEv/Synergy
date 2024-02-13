<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GuruView extends Component
{
    public $nama;
    public $nama_panggilan;
    public $jabatan;
    public $ttl;
    public $kode;
    public $mapel;
    public $nip;
    public $email;
    public $id;
    public $guru;
    public function render()
    {
        $dataGuru = Guru::find($this->id);
        $this->nama = $dataGuru->nama;
        $this->nama_panggilan = $dataGuru->nama_panggilan;
        $this->jabatan = $dataGuru->jabatan;
        $this->ttl = $dataGuru->ttl;
        $this->kode = $dataGuru->kode;
        $this->mapel = $dataGuru->mapel;
        $this->nip = $dataGuru->nip;
        $this->email = $dataGuru->email;
        return view('livewire.pplg.dashboard.guru-view', compact('dataGuru'));
    }

    public function hapusGuru($id)
    {
        $this->guru = Guru::find($id);
        $foto = $this->guru->foto;
        
        
        if ($foto != 'no_profile.webp') {
            Storage::delete('public/' . $foto);
        }
        $this->guru->delete();
        session()->flash('msg', __('Guru Berhasil dihapus'));
        session()->flash('alert', 'success');
        return redirect('/dashboard/guru');
    }
    
    public function editBio($id){
        $editGuru = Guru::find($id);
        $editGuru->nama = $this->nama;
        $editGuru->update();
    }
}
