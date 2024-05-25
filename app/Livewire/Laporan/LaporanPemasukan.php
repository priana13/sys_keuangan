<?php

namespace App\Livewire\Laporan;

use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Component;

class LaporanPemasukan extends Component
{
    public $total_pemasukan;

    public $saldo_awal = 0;  

    public function mount(){

        // get saldo awal
        $this->saldo_awal = Transaksi::getSaldoAwal();
    }
    
    public function render()
    {
        $list_pemasukan = Kategori::mine()->pemasukan()->get();     

        return view('livewire.laporan.laporan-pemasukan' , \compact('list_pemasukan'));
    }
}
