<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;

class SaldoUtama extends Component
{
    public $saldo_saya;

    protected $listeners = [
        'updateOverView'
    ];

    public function render()
    {

        $total_pemasukan = Transaksi::mine()->pemasukan()->sum('nominal');

        $total_pengeluaran = Transaksi::mine()->pengeluaran()->sum('nominal');

        $this->saldo_saya = $total_pemasukan - $total_pengeluaran;

        return view('livewire.saldo-utama');
    }

    public function updateOverView(){
        // method ini akan menangkap jika ada perubahan pada table

    }
}
