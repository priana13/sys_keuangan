<?php

namespace App\Livewire\Pengaturan;

use App\Models\Kategori;
use Livewire\Component;

class KategoriPemasukan extends Component
{
    public function render()
    {
        $data['kategori_pemasukan'] = Kategori::pemasukan()->get();

        return view('livewire.pengaturan.kategori-pemasukan', $data);
    }
}
