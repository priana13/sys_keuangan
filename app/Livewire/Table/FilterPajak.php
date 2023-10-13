<?php

namespace App\Livewire\Table;

use Livewire\Component;
use App\Models\Kategori;

class FilterPajak extends Component
{
    public $bulan_awal;
    public $bulan_akhir;

    public function mount(){

        $this->bulan_awal = date('Y-01');
        $this->bulan_akhir = date('Y-m');
    }

    public function render()
    {
        $data['kategori'] = Kategori::pemasukan()->get();

        return view('livewire.table.filter-pajak', $data);
    }

    public function filter(){

        $this->dispatch('filterTable',[            
            'bulan_awal' => $this->bulan_awal,
            'bulan_akhir' => $this->bulan_akhir
        ]);
    }
}
