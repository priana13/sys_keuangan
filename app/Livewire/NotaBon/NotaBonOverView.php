<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;

class NotaBonOverView extends Component
{
    public function render()
    {
        $data['sudah_bayar'] = NotaBon::sum('total');
        $data['belum_bayar'] = NotaBon::sum('total');

        return view('livewire.nota-bon.nota-bon-over-view' , $data);
    }
}
