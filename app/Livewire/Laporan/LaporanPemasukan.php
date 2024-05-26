<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Doctrine\DBAL\TransactionIsolationLevel;
use Livewire\Component;

class LaporanPemasukan extends Component
{
    public $total_pemasukan;

    // saldo awal kas + saldo_akhir bulan sebelumnya
    public $saldo_awal = 0; 
    
    public $start_date;

    public $end_date;

    public function mount(){

        $this->start_date = now()->startOfMonth();
        $this->end_date = now();

        // get saldo awal dari kas baru
        $saldo_awal_kas = Kas::getSaldoAwal(
            $this->start_date, $this->end_date
        );

        $saldo_akhir_bulan_lalu = Transaksi::getSaldoAkhirBulanLalu($this->start_date , $this->end_date);

        $this->saldo_awal = $saldo_awal_kas + $saldo_akhir_bulan_lalu;

      
    }
    
    public function render()
    {  
        $list_pemasukan = Kategori::mine()->pemasukan()->get();  
        
        $pemasukan = Transaksi::mine()->pemasukan()->periode($this->start_date, $this->end_date)->sum('nominal');

        $this->total_pemasukan = $this->saldo_awal + $pemasukan;

        return view('livewire.laporan.laporan-pemasukan' , \compact('list_pemasukan'));
    }


}
