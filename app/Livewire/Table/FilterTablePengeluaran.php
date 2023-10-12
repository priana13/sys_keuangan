<?php

namespace App\Livewire\Table;

use Livewire\Component;
use App\Models\Kategori;

class FilterTablePengeluaran extends Component
{
    public $kategori_id;
    public $tanggal_awal;
    public $tanggal_akhir;

    public function render()
    {
        $data['kategori'] = Kategori::pengeluaran()->get();

        return view('livewire.table.filter-table-pengeluaran', $data);
    }

    public function filter(){

        $this->dispatch('filterTable',[
            'kategori_id' => $this->kategori_id,
            'tanggal_awal' => $this->tanggal_awal,
            'tanggal_akhir' => $this->tanggal_akhir
        ]);
    }
}
