<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListNotaBon extends Component
{
    use LivewireAlert;
    
    public $selected_id;

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {

        $data['nota_bon'] = NotaBon::paginate(10);

        return view('livewire.nota-bon.list-nota-bon',$data);
    }

    public function delete($id){

        $this->selected_id = $id;  

        $this->alert('warning', 'Yakin ingin dihapus?', [
            'showCancelButton' => true,
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',            
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
        $record = NotaBon::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    } 
}
