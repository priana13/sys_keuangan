<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Wireable;

class EditPengeluaran extends Component
{
    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan = "tes";
    public $kas_id;   
    public $kategori_id;

    public $pengeluaran;

    public function mount(Transaksi $pengeluaran){
        
        $this->pengeluaran = $pengeluaran;
    }

    public function render()
    {       
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.edit-pengeluaran', $data);
    }
}
