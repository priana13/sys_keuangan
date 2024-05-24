<?php

namespace App\Livewire\Laporan;

use App\Models\Pajak;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SemuaLaporan extends Component
{
    public $start;
    public $end;
    public $is_filter = false;

    public $laba_bersih;

    public $laba_rugi;
    public $list_bulan = [];

    public function mount(Request $request){       
        

        $this->generateMonthList();

        $this->start = date('Y-01-01');
        $this->end = date('Y-m-d');


    }

    public function render()
    { 
        
        if($this->is_filter){

           $start_date = $this->start;
           $end_date = $this->end;
    
        }else{

            $start_date = date('Y-01-01');
            $end_date = date('Y-m-d');
            
        }        

        $data['total_pemasukan'] = Transaksi::pemasukan()->periode($start_date, $end_date)->sum('nominal'); 
        
        $operasional = Kategori::where('nama', "Operasional")->first();
        $data['operasional'] = $operasional->transaksi()->periode($start_date, $end_date)->sum('nominal');      
        
        $bahan_baku = Kategori::where('nama', "Bar & Kichen")->first();              
        $data['bahan_baku'] = $bahan_baku->transaksi()->periode($start_date, $end_date)->sum('nominal'); 
        
        $asset = Kategori::where('nama', "Asset")->first();

        if($asset){
            $data['asset'] = $asset->transaksi->sum('nominal');

            $data["pengeluaran_asset"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
            ->pengeluaran()
            ->where('kategori_id', $asset->id)
            ->periode($start_date, $end_date)
            ->groupByRaw('MONTH(tanggal)')
            ->pluck("pengeluaran", "bulan");

        }else{

            $data['asset'] = 0;
            $data["pengeluaran_asset"] = [];

        }               


        // Transaksi Non Operasional
        $data['sponsor'] = Kategori::where('nama', "Sponsor")->first()->transaksi()->periode($start_date, $end_date)->sum('nominal');      
        $data['pemasukan_lain'] = Kategori::where('nama', "Pemasukan Lain")->first()->transaksi()->periode($start_date, $end_date)->sum('nominal');      

        $data['pajak'] = Pajak::sum('jumlah');

        $data["pemasukan"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pemasukan')
                    ->pemasukan()
                    ->periode($start_date, $end_date)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pemasukan", "bulan");

        $data["pengeluaran"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->periode($start_date, $end_date)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        $data["pengeluaran_operasional"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->periode($start_date, $end_date)
                    ->where('kategori_id', $operasional->id)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        

        $data["pengeluaran_bahan_baku"] = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->periode($start_date, $end_date)
                    ->where('kategori_id', $bahan_baku->id)
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");
       
        $this->laba_bersih = $data['total_pemasukan'] - $data['pajak'];

        $this->dispatch('getData'); 
        
        return view('livewire.laporan.semua-laporan' , $data);
    }

   
    public function generateMonthList() {


        if($this->is_filter){

            $start_date = $this->start;
            $end_date = $this->end;
     
         }else{
 
             $start_date = date('Y-01-01');
             $end_date = date('Y-m-d');
             
         }


        $period = \Carbon\CarbonPeriod::create($start_date, '1 month', $end_date);

        $month= [];
        foreach ($period as $dt) {
             $month[] = $dt->format("Y-m");
        }

        $this->list_bulan = $month;
    }

    public function filter(){

        $this->is_filter = true;

        $this->generateMonthList();

    }
}
