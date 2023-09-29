<?php

namespace App\Livewire\Pemasukan;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;

class TambahPemasukan extends Component
{

    public $tanggal;
    public $type = "Pemasukan";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan = "tes";
    public $kas_id;   
    public $kategori_id;

    public function render()
    {
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pemasukan.tambah-pemasukan', $data);
    }
}
