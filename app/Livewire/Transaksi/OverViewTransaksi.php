<?php

namespace App\Livewire\Transaksi;

use App\Models\Transaksi;
use Livewire\Component;

class OverViewTransaksi extends Component
{
    public $total_pengeluaran;

    public $total_pemasukan;

    protected $listeners = [
        'updateOverView'
    ];

    public function render()
    {
        $this->total_pemasukan = Transaksi::pemasukan()->sum('nominal');

        $this->total_pengeluaran = Transaksi::pengeluaran()->sum('nominal');

        return view('livewire.transaksi.over-view-transaksi');
    }

    public function updateOverView(){
        // method ini akan menangkap jika ada perubahan pada table

    }


}
