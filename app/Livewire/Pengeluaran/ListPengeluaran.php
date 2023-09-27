<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Transaksi;
use Livewire\Component;

class ListPengeluaran extends Component
{
    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;
    public $user_id;
    public $metode_bayar;
    public $keterangan;
    public $kas_id;
    public $metode_bayar_id;

    public function render()
    {
        return view('livewire.pengeluaran.list-pengeluaran');
    }

    public function save(){

        Transaksi::create([
            'tanggal' => $this->tanggal,
            'type' => $this->type,
            'nominal' => $this->nominal,
            'keterangan' => $this->keterangan,
            'kategori_id' => $this->kategori_id,
            'user_id' => auth()->user()->id,
            'kas_id' => $this->kas_id,
            'metode_bayar' => $this->metode_bayar_id
        ]);
    }
}
