<?php

namespace App\Livewire\Pemasukan;

use Livewire\Component;

class ListPemasukan extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.pemasukan.list-pemasukan');
    }
}
