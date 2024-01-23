<?php

namespace App\Livewire\Pplg\Dashboard;

use App\Models\Guru;
use Livewire\Component;

class GuruEdit extends Component
{
    public $id;
    public function render()
    {
        $guru = Guru::find($this->id);
        return view('livewire.pplg.dashboard.guru-edit');
    }
}
