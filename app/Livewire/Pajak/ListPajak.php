<?php

namespace App\Livewire\Pajak;

use App\Models\Pajak;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListPajak extends Component
{
    use LivewireAlert;

    public $selected_id;
    public $pajak_bulan = 0;
    public $pajak_tahun = 0;
    public $jumlah;
    public $bulan;

    protected $listeners = [
        'confirmed'
    ];
    
    public function render()
    {
        $data['list_pajak'] = Pajak::latest()->paginate(10);

        $this->pajak_bulan = Pajak::bulanIni()->sum('jumlah');
        $this->pajak_tahun = Pajak::tahunIni()->sum('jumlah');

        return view('livewire.pajak.list-pajak', $data);
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
        $record = Pajak::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    }

    public function save(){

        $this->validate([
            'jumlah' => 'required',
        ]);

        $bulan = date('m', strtotime($this->bulan));
        $tahun = date('Y', strtotime($this->bulan));

        Pajak::create([
            'bulan' => $bulan,
            'tahun' => $tahun,
            'jumlah' => $this->jumlah
        ]);

        $this->alert('success', "Data Berhasil Disimpan");
    }
}
