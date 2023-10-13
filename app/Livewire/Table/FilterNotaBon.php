<?php

namespace App\Livewire\Table;

use Livewire\Component;
use App\Models\Kategori;

class FilterNotaBon extends Component
{
   
    public $status;
    public $tanggal_awal;
    public $tanggal_akhir;

    public function mount(){

        $this->tanggal_awal = date('Y-01-01');
        $this->tanggal_akhir = date('Y-m-d');
    }

    public function render()
    {
        $data['kategori'] = Kategori::pemasukan()->get();

        return view('livewire.table.filter-nota-bon', $data);
    }

    public function filter(){

        $this->dispatch('filterTable',[
            'status' => $this->status,
            'tanggal_awal' => $this->tanggal_awal,
            'tanggal_akhir' => $this->tanggal_akhir
        ]);
    }
}
