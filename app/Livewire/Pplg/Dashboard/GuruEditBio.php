<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Livewire\Component;

class GuruEditBio extends Component
{
    public $id, $nama, $nama_panggilan, $jabatan, $ttl, $mapel, $kode, $nip, $email, $guruData;
    public function render()
    {
        $this->guruData = Guru::find($this->id);
        $this->nama = $this->guruData->nama;  
        $this->nama_panggilan = $this->guruData->nama_panggilan;  
        $this->jabatan = $this->guruData->jabatan;  
        $this->ttl = $this->guruData->ttl;  
        $this->mapel = $this->guruData->mapel;  
        $this->kode = $this->guruData->kode;  
        $this->nip = $this->guruData->nip;  
        $this->email = $this->guruData->email;  
        return view('livewire.pplg.dashboard.guru-edit-bio');
    }

    public function editBioGuru(){
        $this->guruData->nama = $this->nama;
        $this->guruData->nama_panggilan = $this->nama_panggilan;
        $this->guruData->jabatan = $this->jabatan;
        $this->guruData->ttl = $this->ttl;
        $this->guruData->mapel = $this->mapel;
        $this->guruData->kode = $this->kode;
        $this->guruData->nip = $this->nip;
        $this->guruData->email = $this->email;
        
        $this->guruData->update();
        session()->flash('msg', __('Bio Guru Berhasil diedit'));
        session()->flash('alert', 'success');
        return redirect('/dashboard/guru/view/'. $this->id);

    }

}