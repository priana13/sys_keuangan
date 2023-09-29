<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListPengeluaran extends Component
{
    use LivewireAlert;

    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan;
    public $kas_id;   
    public $kategori_id;

    public $selected_record;

    public function mount(){

        $this->tanggal = date('Y-m-d');

    }

    public function render()
    {
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.list-pengeluaran', $data);
    }
    
}
