<?php

namespace App\Livewire\Pplg\Dashboard\Kelas;

use App\Models\Kelas;
use App\Models\Wali;
use Livewire\Component;

class KelasAdd extends Component
{
    public $data;
    public function render()
    {
        $this->data = Wali::where('walikelas', '--')->orderBy('id', 'desc')->get();
        $dt = $this->data;
        return view('livewire.pplg.dashboard.kelas.kelas-add', compact('dt'));
    }

    public $nama;
    public $angkatan;
    public $slogan;
    public $wali;
    public $foto;
    public $memories;
    public $prestasi;
    public function saveKelas()
    {
        $input = $this->validate([
            'nama' => 'required',
            'angkatan' => 'required',
            'slogan' => 'required',
            'wali' => 'required',
            'foto' => 'max:1020',
        ]);
        
        $post = new Kelas();
        $post->nama = $this->nama;
        $post->angkatan = $this->angkatan;
        $post->slogan = $this->slogan;
        $post->wali_nama = $this->wali;
        $post->prestasi = '';
        $post->memories = '';
        if($this->foto == null){
            $post->cover = 'no_profile.webp';
        } else {
            $data = $this->foto->store('walikelas', 'public');
            $post->cover = $data;
        }
        $data = Wali::where('nama_lengkap', $this->wali)->first();
        $data->walikelas = $this->nama;
        
        try {
            $post->save();
            $data->save();
            session()->flash('msg', __('Kelas Berhasil ditambahkan'));
            session()->flash('alert', 'success');
            return redirect('/dashboard/kelas');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'bg-red-300');
        }
    }
}
