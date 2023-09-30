<?php

namespace App\Livewire\Pengeluaran;

use App\Exports\ExportPengeluaran;
use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Facades\Excel;


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

    public $selected_id;

    public $search;

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {

        $transaksi = Transaksi::pengeluaran()->latest();

        if($this->search){          

            $transaksi->where('keterangan', 'like' , '%' . $this->search . '%');
        }

        $data['transaksi'] = $transaksi->paginate(10);

        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.table-pengeluaran', $data);
    }

    public function delete($id){

        $this->selected_id = $id;  

        $this->alert('warning', 'Yakin ingin dihapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',
            'showCancelButton' => true,
            'confirmButtonColor' => '#ed4e73',
            'cancelButtonText' => 'Cancel',
            'toast' => false,
            'position' => 'center',
            'onConfirmed' => 'confirmed',
            'timer' => null
        ]); 

    }

    public function confirmed()
    {
        $record = Transaksi::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    }

    public function export(){

        return Excel::download(new ExportPengeluaran(), 'pengeluaran.xlsx');
    }



}
