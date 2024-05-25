<?php

namespace App\Livewire\Laporan;

use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Component;

class LaporanPemasukan extends Component
{
    public $total_pemasukan;
    
    public function render()
    {
        $list_pemasukan = Kategori::mine()->pemasukan()->get();     

        return view('livewire.laporan.laporan-pemasukan' , \compact('list_pemasukan'));
    }
}
