<?php

namespace App\Livewire\Pemasukan;

use App\Exports\ExportPemasukan;
use Livewire\Component;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Facades\Excel;

class TablePemasukan extends Component
{
    use LivewireAlert;

    public $search;
    public $selected_id;

    public $kategori_id;

    public $tanggal_awal;
    public $tanggal_akhir;


    protected $listeners = [
        'confirmed', 'filterTable'
    ];

    public function mount(){

        $this->tanggal_awal = date('Y-01-01');
        $this->tanggal_akhir = date('Y-m-d');
    }
    
    public function render()
    {  

        $transaksi = Transaksi::pemasukan()->latest();

        if($this->tanggal_awal && $this->tanggal_akhir){
            
            $transaksi->periode($this->tanggal_awal, $this->tanggal_akhir);
        }

        if($this->kategori_id){
            $transaksi->where('kategori_id', $this->kategori_id);
        }

        if($this->search){          

            $transaksi->where('keterangan', 'like' , '%' . $this->search . '%');
        }

        $data['transaksi'] = $transaksi->paginate(10);


        return view('livewire.pemasukan.table-pemasukan', $data);
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

        return Excel::download(new ExportPemasukan(), 'pemasukan.xlsx');
    }

    public function filterTable($data){

        $this->tanggal_awal = $data['tanggal_awal'];
        $this->tanggal_akhir = $data['tanggal_akhir'];
        $this->kategori_id = $data['kategori_id'];
    }

}
