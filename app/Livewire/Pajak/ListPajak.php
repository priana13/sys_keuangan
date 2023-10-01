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

    public $form_title = "Input Pajak";
    public $form_type = "input";
    public $form_action = "Tambah Data";

    protected $listeners = [
        'confirmed'
    ];
    
    public function render()
    {
        $data['list_pajak'] = Pajak::latest()->paginate(12);

        $this->pajak_bulan = Pajak::bulanIni()->sum('jumlah');
        $this->pajak_tahun = Pajak::tahunIni()->sum('jumlah');

        return view('livewire.pajak.list-pajak', $data);
    }

    public function input(){

        $this->form_title = "Input Data Pajak";
        $this->form_type = "input";
        $this->form_action = "Tambah";
        $this->selected_id = '';
    }

    public function edit($id){

        $this->form_title = "Ubah Data Pajak";
        $this->form_type = "edit";
        $this->form_action = "Ubah Data";

        $this->selected_id = $id;

        $record = Pajak::find($id);

        $this->jumlah = $record->jumlah;
        $this->bulan = $record->tahun . "-" . $record->bulan;

        $this->dispatch('edit-pajak'); 
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

        if($this->form_type == 'input'){

            Pajak::create([
                'bulan' => $bulan,
                'tahun' => $tahun,
                'jumlah' => $this->jumlah
            ]);

        }else{

            $record = Pajak::find($this->selected_id);
            $record->bulan = $bulan;
            $record->tahun = $tahun;
            $record->jumlah = $this->jumlah;
            $record->save();

        }


        $this->alert('success', "Data Berhasil Disimpan");
    }
}
