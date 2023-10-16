<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ClosingToko extends Component
{
    use LivewireAlert;

    public $tanggal;

    public $list_bank;
    public $list_cash;

    public array $data_bank = [];

    public array $data_cash = [];

    public $komisi_supir;

    public $band;

    public function mount(){

        $this->tanggal = date('Y-m-d');

    }

    public function render()
    {
        $this->list_bank = Kas::bank()->get();
        $this->list_cash = Kas::cash()->get();

        return view('livewire.laporan.closing-toko');
    }

    public function save(){

        $status_input = false;

        $penjualan = Kategori::where('nama', 'Penjualan')->pemasukan()->first();    
        

        // input ke pemasukan bank
        if( count($this->data_bank) > 0 ){

            foreach ($this->data_bank as $key => $value) {

               Transaksi::create([
                'tanggal' => $this->tanggal,
                'type' => "Pemasukan",
                'nominal' => $value,
                'keterangan' => 'Closing Toko',
                'kategori_id' => $penjualan->id,
                'user_id' => auth()->user()->id,
                'kas_id' => $key,
                'metode_bayar' => 'Bank'
               ]);
            }

            $status_input = true;
        }

        // input ke pemasukan cash
        if( count($this->data_cash) > 0 ){

            foreach ($this->data_cash as $key => $value) {

                Transaksi::create([
                 'tanggal' => $this->tanggal,
                 'type' => "Pemasukan",
                 'nominal' => $value,
                 'keterangan' => 'Closing Toko',
                 'kategori_id' => $penjualan->id,
                 'user_id' => auth()->user()->id,
                 'kas_id' => $key,
                 'metode_bayar' => 'Cash'
                ]);
             }

             $status_input = true;

        }

        // input ke pengeluaran
        if($this->komisi_supir){

            $supir = Kategori::where('nama', "Komisi Supir")->first();
            $cash = Kas::where('type', "Cash")->first();

            Transaksi::create([
                'tanggal' => $this->tanggal,
                'type' => "Pengeluaran",
                'nominal' => $this->komisi_supir,
                'keterangan' => 'Closing Toko',
                'kategori_id' => $supir->id,
                'user_id' => auth()->user()->id,
                'kas_id' => $cash->id,
                'metode_bayar' => 'Cash'
               ]);

            $status_input = true;
        }

        if($this->band){

            $band = Kategori::where('nama', "Band")->first();
            $cash = Kas::where('type', "Cash")->first();

            Transaksi::create([
                'tanggal' => $this->tanggal,
                'type' => "Pengeluaran",
                'nominal' => $this->band,
                'keterangan' => 'Closing Toko',
                'kategori_id' => $band->id,
                'user_id' => auth()->user()->id,
                'kas_id' => $cash->id,
                'metode_bayar' => 'Cash'
               ]);

            $status_input = true;

        }
        

        if($status_input){

            $this->reset();

            $this->alert('success', "Laporan Berhasil Terkirim");
        }       


    }
 
}
