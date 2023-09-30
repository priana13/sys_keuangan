<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditNotaBon extends Component
{
    use LivewireAlert;

    public $tanggal;
    public $suplier;
    public $total;
    public $status;
    public $nama_suplier;

    public $record;

    public function mount(NotaBon $record){        
        
        $this->record = $record;     
        $this->tanggal = $record->tanggal;
        $this->nama_suplier = $record->nama_suplier;
        $this->status = $record->status;
        $this->total = $record->total;

     }

    public function render()
    {
        return view('livewire.nota-bon.edit-nota-bon');
    }

    public function save(){

        $this->validate([
            'tanggal' => 'required',
            'total' => 'required',
            'nama_suplier' => 'required'            
        ]);



        NotaBon::where('id', $this->record->id)->update([
            'tanggal' => $this->tanggal,
            'total' => $this->total,
            'nama_suplier' => $this->nama_suplier,
            'status' => $this->status
        ]);

        $this->alert('success', "Data Berhasil Update");

        // return redirect('nota-bon');
    }
}
