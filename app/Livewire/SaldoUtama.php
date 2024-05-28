<?php

namespace App\Livewire;

use App\Models\Kas;
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

        $saldo_awal = Kas::mine()->sum('saldo_awal');

        $total_pemasukan = Transaksi::mine()->pemasukan()->sum('nominal');

        $total_pengeluaran = Transaksi::mine()->pengeluaran()->sum('nominal');

        $this->saldo_saya = $saldo_awal + $total_pemasukan - $total_pengeluaran;

        return view('livewire.saldo-utama');
    }

    public function updateOverView(){
        // method ini akan menangkap jika ada perubahan pada table

    }
}
