<?php

namespace App\Livewire\Pengeluaran;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Imports\ImportPengeluaran as ImportsImportPengeluaran;


class ImportPengeluaran extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $file;

    public function render()
    {
        return view('livewire.pengeluaran.import-pengeluaran');
    }

    public function import(){

        Excel::import(new ImportsImportPengeluaran , $this->file);

        $this->reset();

        $this->alert('success', "Data berhasil diimport");
    }
}
