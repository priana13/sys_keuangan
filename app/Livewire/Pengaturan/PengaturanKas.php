<?php

namespace App\Livewire\Pengaturan;

use App\Models\Kas;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class PengaturanKas extends Component
{
    use LivewireAlert;

    public $selected_id;
    public $action_type = "create";

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {
        $kas = Kas::all();

        return view('livewire.pengaturan.pengaturan-kas',compact('kas'));
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
