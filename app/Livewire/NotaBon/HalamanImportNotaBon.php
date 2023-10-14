<?php

namespace App\Livewire\NotaBon;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\ImportNotaBon;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HalamanImportNotaBon extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $file;

    public function render()
    {
        return view('livewire.nota-bon.halaman-import-nota-bon');
    }

    public function import(){

        $this->validate(['file' => 'required']);
        
        Excel::import(new ImportNotaBon , $this->file);

        $this->reset();

        $this->alert('success', "Data berhasil diimport");
    }
}
