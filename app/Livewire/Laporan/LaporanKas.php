<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use Livewire\Component;

class LaporanKas extends Component
{
    public $saldo_kas = 0; 

    public function mount(){


    }

    public function render()
    {
        $list_kas = Kas::mine()->get();  
        
        foreach ($list_kas as $kas) {

            $kas->getSaldoAkhirKas($kas->id);
            # code...
        }

        return view('livewire.laporan.laporan-kas' , compact('list_kas'));
    }
}
