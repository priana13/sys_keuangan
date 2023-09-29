<?php

namespace App\Livewire\Pemasukan;

use Livewire\Component;
use App\Models\Kategori;

class OverViewPemasukan extends Component
{
    public function render()
    {
        $kategori = Kategori::where('type','Pemasukan')->get();

        return view('livewire.pemasukan.over-view-pemasukan', compact('kategori'));
    }
}
