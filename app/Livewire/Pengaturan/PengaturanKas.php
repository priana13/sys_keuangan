<?php

namespace App\Livewire\Pengaturan;

use App\Models\Kas;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Rule;

class PengaturanKas extends Component
{
    use LivewireAlert;

    public $selected_id;
    public $action_type = "create";

    #[Rule('required|min:3')] 
    public $nama;

    #[Rule('required|min:3')] 
    public $type;

    #[Rule('required|min:3')] 
    public $atas_nama;

    #[Rule('required|min:3')] 
    public $no_rek;

    public $record;

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {
        $kas = Kas::all();

        return view('livewire.pengaturan.pengaturan-kas',compact('kas'));
    }

    public function create(){        
        
        $this->validate();

        Kas::create([
            'type' => $this->type,
            "nama" => $this->nama,
            "no_rek" => $this->no_rek,
            'atas_nama' => $this->atas_nama
        ]);

        $this->alert('success', "Data Berhasil Disimpan");
    }

    public function edit($id){

        $this->selected_id = $id;

        $this->record = Kas::find($id);
        $this->nama = $this->record->nama;
        $this->type = $this->record->type;
        $this->atas_nama = $this->record->atas_nama;
        $this->no_rek = $this->record->no_rek;
        
        $this->action_type = "update";
    }
    
    public function update(){

        $this->validate();

        $this->record->nama = $this->nama;
        $this->record->no_rek = $this->no_rek;
        $this->record->type = $this->type;
        $this->record->atas_nama = $this->atas_nama;
        $this->record->save();

        $this->alert('success', "Data Berhasil Diudate");


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
        $record = Kas::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    }
}
