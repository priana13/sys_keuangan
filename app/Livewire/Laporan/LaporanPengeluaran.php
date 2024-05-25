<?php

namespace App\Livewire\Laporan;

use Livewire\Component;
use App\Models\Kategori;

class LaporanPengeluaran extends Component
{
    public $total_pengeluaran;
    
    public function render()
    {
        $list_pengeluaran = Kategori::mine()->pengeluaran()->get(); 

        return view('livewire.laporan.laporan-pengeluaran' , \compact('list_pengeluaran'));
    }
}
