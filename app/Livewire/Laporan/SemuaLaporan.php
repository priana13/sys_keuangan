<?php

namespace App\Livewire\Laporan;

use App\Models\Pajak;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class SemuaLaporan extends Component
{
    public $start;
    public $end;

    public $laba_bersih;


    public function mount(){

        $this->start = date('Y-01-01');
        $this->end = date('Y-m-d');
    }

    public function render()
    {      

        $data['list_bulan'] = $this->generateMonthList($this->start,$this->end);

        $data['total_pemasukan'] = Transaksi::pemasukan()->sum('nominal'); 
        
        $operasional = Kategori::where('nama', "Operasional")->first();
        $data['operasional'] = $operasional->transaksi->sum('nominal');      
        
        $bahan_baku = Kategori::where('nama', "Bar & Kichen")->first();              
        $data['bahan_baku'] = $bahan_baku->transaksi->sum('nominal'); 
        
        $asset = Kategori::where('nama', "Asset")->first();
        $data['asset'] = $asset->transaksi->sum('nominal');      


        // Transaksi Non Operasional
        $data['sponsor'] = Kategori::where('nama', "Sponsor")->first()->transaksi->sum('nominal');      
        $data['pemasukan_lain'] = Kategori::where('nama', "Pemasukan Lain")->first()->transaksi->sum('nominal');      

        $data['pajak'] = Pajak::sum('jumlah');

        $data["pemasukan"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pemasukan')
                    ->pemasukan()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pemasukan", "bulan");

        $data["pengeluaran"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        $data["pengeluaran_operasional"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->where('kategori_id', $operasional->id)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        $data["pengeluaran_asset"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->where('kategori_id', $asset->id)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        $data["pengeluaran_bahan_baku"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->where('kategori_id', $bahan_baku->id)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");
       
        $this->laba_bersih = $data['total_pemasukan'] - $data['pajak'];
        
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
