<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TambahNotaBon extends Component
{
    use LivewireAlert;

    public $tanggal;
    public $suplier;
    public $total;
    public $status;
    public $nama_suplier;

    public function mount(){

        $this->tanggal = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.nota-bon.tambah-nota-bon');
    }

    public function save(){

        $this->validate([
            'tanggal' => 'required',
            'total' => 'required',
            'nama_suplier' => 'required'            
        ]);

        NotaBon::create([
            'tanggal' => $this->tanggal,
            'total' => $this->total,
            'nama_suplier' => $this->nama_suplier,
            'status' => $this->status
        ]);

        $this->alert('success', "Data Berhasil disimpan");

        return redirect('nota-bon');
    }
}
