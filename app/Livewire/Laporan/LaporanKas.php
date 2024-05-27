<?php

namespace App\Livewire\Laporan;

use App\Models\Kas;
use Livewire\Component;

class LaporanKas extends Component
{
    public $saldo_kas = 0; 

    public function render()
    {
        $list_kas = Kas::mine()->get();       

        return view('livewire.laporan.laporan-kas' , compact('list_kas'));
    }
}
