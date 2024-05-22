<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;

class Dashboard extends Component
{
    public function mount(){

        // if(auth()->user()->type != 'Administrator'){
        //     redirect()->route('pemasukan');
        // }

    }
    public function render()
    {       
        $list_bulan = $this->list_bulan();     
        
        $data_pemasukan = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pemasukan')
                    ->pemasukan()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pemasukan", "bulan");

        $data_pengeluaran = Transaksi::selectRaw('MONTH(tanggal) as bulan, SUM(nominal) as pengeluaran')
                    ->pengeluaran()
                    ->groupByRaw('MONTH(tanggal)')
                    ->pluck("pengeluaran", "bulan");

        $pemasukan = [];
        $pengeluaran = [];
       

        foreach ($list_bulan as $key => $value) {
          
            $bulan[] = $value;

            if(isset($data_pemasukan[$key])){

                $pemasukan[] = $data_pemasukan[$key];
            }else{
                $pemasukan[] = 0;
            }

            if(isset($data_pengeluaran[$key])){

                $pengeluaran[] = (isset($data_pengeluaran[$key]))? $data_pengeluaran[$key] : 0;
            }else{
                $pengeluaran[] = 0;
            } 


            if($key >= intval( date('m') ) ){
                break;
            }
        } 
           

        return view('livewire.dashboard' , compact('bulan', 'pemasukan', 'pengeluaran'));
    }


    public static function list_bulan():array
    {

    	return [
    		"1" => "Januari",
    		"2" => "Februari",
    		"3" => "Maret",
    		"4" => "April",
    		"5" => "Mei",
    		"6" => "Juni",
    		"7" => "Juli",
    		"8" => "Agustus",
    		"9" => "September",
    		"10" => "Oktober",
    		"11" => "November",
    		"12" => "Desember"

    	];

    }
}
