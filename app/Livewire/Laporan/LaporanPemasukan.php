<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Doctrine\DBAL\TransactionIsolationLevel;
use Livewire\Component;

class LaporanPemasukan extends Component
{
    
    public $pemasukan_bulan_ini = 0; 

    public $total_pemasukan;

    // saldo awal kas + saldo_akhir bulan sebelumnya
    public $saldo_awal = 0; 
    
    public $start_date;

    public $end_date;

    public function mount(){

        $this->start_date = now()->startOfMonth();
        $this->end_date = now();

        $this->saldo_awal = Transaksi::getSaldoAwal($this->start_date, $this->end_date);
      
    }
    
    public function render()
    {  
        $list_pemasukan = Kategori::mine()->pemasukan()->get();  
        
        $pemasukan = Transaksi::getTotalPemasukan($this->start_date, $this->end_date);

        $this->total_pemasukan = $this->saldo_awal + $pemasukan;

        $this->pemasukan_bulan_ini = $pemasukan;

        return view('livewire.laporan.laporan-pemasukan' , \compact('list_pemasukan'));
    }


}
