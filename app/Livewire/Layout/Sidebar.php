<?php

namespace App\Livewire\Layout;

use App\Models\Setting;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $getLogo = Setting::getData('logo');
        
        ($getLogo)?
            $logo = $getLogo->value:
            $logo = "";

        $getNamaPerusahaan = Setting::getData('nama_perusahaan');
        ($getNamaPerusahaan)?
                $nama_perusahaan = $getNamaPerusahaan->value:
                $nama_perusahaan = "";
       
        return view('livewire.layout.sidebar', compact('logo', 'nama_perusahaan'));
    }
}
