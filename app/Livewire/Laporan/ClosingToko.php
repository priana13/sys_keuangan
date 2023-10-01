<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use Livewire\Component;

class ClosingToko extends Component
{
    public $tanggal;

    public $list_bank;
    public $list_cash;

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

        // input ke pemasukan 


        // input ke pengeluaran

    }
}
