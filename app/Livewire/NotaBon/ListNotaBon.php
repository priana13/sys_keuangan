<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;

class ListNotaBon extends Component
{
    public function render()
    {

        $data['nota_bon'] = NotaBon::paginate(10);

        return view('livewire.nota-bon.list-nota-bon',$data);
    }
}
