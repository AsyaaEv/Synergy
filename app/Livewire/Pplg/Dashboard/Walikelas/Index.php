<?php

namespace App\Livewire\Pplg\Dashboard\Walikelas;

use App\Models\Wali;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $wali = Wali::all();
        return view('livewire.pplg.dashboard.walikelas.index', compact('wali'));
    }
}
