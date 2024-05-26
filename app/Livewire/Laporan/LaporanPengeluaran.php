<?php

namespace App\Livewire\Laporan;

use Livewire\Component;
use App\Models\Kategori;
use Illuminate\Support\Number;
class LaporanPengeluaran extends Component
{ 

    public $total_pengeluaran;  

    public $start_date;

    public $end_date;

    public function mount(){

        $this->start_date = now()->startOfMonth();
        $this->end_date = now();

    }
    
    public function render()
    {  
        $list_pengeluaran = Kategori::mine()->pengeluaran()->get(); 

        return view('livewire.laporan.laporan-pengeluaran' , \compact('list_pengeluaran'));
    }


   
}
