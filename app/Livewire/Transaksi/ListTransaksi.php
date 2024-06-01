<?php

namespace App\Livewire\Transaksi;

use App\Models\Transaksi;
use Livewire\Component;

class ListTransaksi extends Component
{   
    public $type = 'All';

    public function mount(){

        // dd('test');

        // if (auth()->user()->cannot('create', Transaksi::class)) {
        //     abort(403);
        // }

    }

    public function render()
    {
        return view('livewire.transaksi.list-transaksi');
    }


    public function ubahType($type){

        $this->type = $type;

        $this->dispatch('ubah_type' , $type);
    }

   
}
