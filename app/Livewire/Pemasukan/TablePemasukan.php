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

    protected $listeners = [
        'confirmed'
    ];
    
    public function render()
    {       

        $transaksi = Transaksi::pemasukan()->latest();

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

}
