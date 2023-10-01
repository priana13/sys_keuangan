<?php

namespace App\Livewire\Pengaturan;

use Livewire\Component;
use App\Models\Kategori;

class KategoriPengeluaran extends Component
{
    public function render()
    {
        $data['kategori_pengeluaran'] = Kategori::pengeluaran()->get();
        
        return view('livewire.pengaturan.kategori-pengeluaran', $data);
    }
}
