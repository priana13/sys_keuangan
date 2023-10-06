<?php

namespace App\Livewire\Laporan\Partial;

use Livewire\Component;

class KolomLabaRugi extends Component
{
    public $jumlah = 10;

    public function mount($pemasukan , $bahan_baku , $operasional, $asset){       

        $this->jumlah = rupiah($pemasukan - $bahan_baku - $operasional - $asset);

    }

    public function render()
    {
        return view('livewire.laporan.partial.kolom-laba-rugi');
    }
}
