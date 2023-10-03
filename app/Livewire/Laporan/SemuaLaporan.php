<?php

namespace App\Livewire\Laporan;

use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SemuaLaporan extends Component
{
    public $start;
    public $end;



    public function mount(){

        $this->start = date('Y-01-01');
        $this->end = date('Y-m-d');
    }

    public function render()
    {      

        $data['list_bulan'] = $this->generateMonthList($this->start,$this->end);

        $data['total_pemasukan'] = Transaksi::pemasukan()->sum('nominal');      
        $data['operasional'] = Kategori::where('nama', "Operasional")->first()->transaksi->sum('nominal');      
       

        // $bahan_baku =  Kategori::where('nama', "Bahan Baku")->first();
       
       
        $data['bahan_baku'] = Kategori::where('nama', "Bar & Kichen")->first()->transaksi->sum('nominal');      
        $data['asset'] = Kategori::where('nama', "Asset")->first()->transaksi->sum('nominal');      

        $data["pemasukan"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pemasukan')
                    ->pemasukan()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pemasukan", "bulan");

        $data["pengeluaran"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");
       

        return view('livewire.laporan.semua-laporan' , $data);
    }


    public function generateMonthList($start_date, $end_date) {
        $start_month = date('n', strtotime($start_date));
        $end_month = date('n', strtotime($end_date));
        $months = [];
    
        for ($i = $start_month; $i <= $end_month; $i++) {
            $month_name = date('m', mktime(0, 0, 0, $i, 1));
            $months[] = $month_name;
        }
    
        return $months;
    }
}
