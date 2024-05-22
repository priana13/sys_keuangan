<?php

namespace App\Livewire\Pengaturan;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class KategoriPemasukan extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $nama;
    public $selected_id;
    public $action_type = "create";

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {
        $data['kategori_pemasukan'] = Kategori::mine()->pemasukan()->get();

        return view('livewire.pengaturan.kategori-pemasukan', $data);
    }

    public function create(){

        $this->validate([
            'nama' => "required|unique:kategori"
        ]);

        Kategori::create([
            "user_id" => auth()->user()->id,
            "nama" => $this->nama,
            "type" => "Pemasukan"
        ]);

        $this->reset();
    }

    public function hapus($id){

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
        $record = Kategori::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    }

    public function edit($id){

        $this->selected_id = $id;

        $kategory = Kategori::find($id);

        $this->nama = $kategory->nama;

        $this->action_type = "update";
    }

    public function update()
    {
        $record = Kategori::findOrFail($this->selected_id);

        $record->nama = $this->nama;
        $record->user_id = auth()->user()->id;
        $record->save();

        $this->alert('success', "Data Berhasil Diupdate");
    }
 
}
