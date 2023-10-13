<?php

namespace App\Livewire\Table;

use Livewire\Component;
use App\Models\Kategori;

class FilterPajak extends Component
{
 
    public $kategori_id;
    public $tanggal_awal;
    public $tanggal_akhir;

    public function mount(){

        $this->tanggal_awal = date('Y-01-01');
        $this->tanggal_akhir = date('Y-m-d');
    }

    public function render()
    {
        $data['kategori'] = Kategori::pemasukan()->get();

        return view('livewire.table.filter-pajak', $data);
    }

    public function filter(){

        $this->dispatch('filterTable',[
            'kategori_id' => $this->kategori_id,
            'tanggal_awal' => $this->tanggal_awal,
            'tanggal_akhir' => $this->tanggal_akhir
        ]);
    }
}
