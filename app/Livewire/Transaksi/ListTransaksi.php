<?php

namespace App\Livewire\Transaksi;

use Livewire\Component;

class ListTransaksi extends Component
{   
    public $type = 'All';

    public function render()
    {
        return view('livewire.transaksi.list-transaksi');
    }


    public function ubahType($type){

        $this->type = $type;

        $this->dispatch('ubah_type' , $type);
    }

   
}
