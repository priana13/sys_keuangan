<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TablePengeluaran extends Component
{
    use WithPagination;
    use LivewireAlert;

    // public $listTransaksi;

    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan = "tes";
    public $kas_id;   
    public $kategori_id;

    public $record;

    public function render()
    {
        $data['transaksi'] = Transaksi::pengeluaran()->latest()->paginate(10);

        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.table-pengeluaran', $data);
    }

    public function delete($id){

        $transaksi = Transaksi::find($id);

        $transaksi->delete();

        $this->alert('success', "Data Berhasil Dihapus");


    }

    #[Renderless] 
    public function edit($id){

        $this->record = Transaksi::find($id);      

        $this->tanggal      = $this->record->tanggal;
        $this->kategori_id  = $this->record->kategori_id;
        $this->kas_id       = $this->record->kas_id;
        $this->keterangan   = $this->record->keterangan;
        $this->nominal      = $this->record->nominal;

        // show modal edit
        $this->dispatch('tampilkan-modal-edit'); 


    }
}
