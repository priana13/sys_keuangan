<?php

namespace App\Livewire\Pemasukan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\ImportPemasukan;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HalamanImportPemasukan extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $file;

    
    public function render()
    {
        return view('livewire.pemasukan.halaman-import-pemasukan');
    }

    public function import(){

        $this->validate(['file' => 'required']);
        
        Excel::import(new ImportPemasukan , $this->file);

        $this->reset();

        $this->alert('success', "Data berhasil diimport");
    }
}
