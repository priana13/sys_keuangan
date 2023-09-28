<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;

class TambahPengeluaran extends Component
{
    public $tanggal;
    public $type = "Pengeluaran";
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
        
        return view('livewire.pengeluaran.tambah-pengeluaran',$data);
    }
}
