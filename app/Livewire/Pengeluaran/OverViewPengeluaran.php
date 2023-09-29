<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kategori;
use Livewire\Component;

class OverViewPengeluaran extends Component
{
    public function render()
    {
        $kategori = Kategori::where('type','Pengeluaran')->get();      

        return view('livewire.pengeluaran.over-view-pengeluaran', compact('kategori'));
    }
}
