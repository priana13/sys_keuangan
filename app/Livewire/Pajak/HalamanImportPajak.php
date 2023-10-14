<?php

namespace App\Livewire\Pajak;

use App\Imports\ImportPajak;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HalamanImportPajak extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $file;

    public function render()
    {
        return view('livewire.pajak.halaman-import-pajak');
    }

    public function import(){

        $this->validate(['file' => 'required']);
        
        Excel::import(new ImportPajak , $this->file);

        $this->reset();

        $this->alert('success', "Data berhasil diimport");
    }

}
