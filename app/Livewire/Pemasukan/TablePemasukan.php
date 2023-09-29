<?php

namespace App\Livewire\Pemasukan;

use Livewire\Component;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TablePemasukan extends Component
{
    use LivewireAlert;
    
    public function render()
    {
        $data['transaksi'] = Transaksi::pemasukan()->latest()->paginate(10);

        return view('livewire.pemasukan.table-pemasukan', $data);
    }

    public function delete($id){

        $transaksi = Transaksi::find($id);

        $transaksi->delete();

        $this->alert('success', "Data Berhasil Dihapus");


    }
}
