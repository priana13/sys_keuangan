<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;

class NotaBonOverView extends Component
{

    public $tanggal_awal;
    public $tanggal_akhir;
    public $status;

    protected $listeners = [      
        'filterTable' , 'updateOverView'
    ];

    public function render()
    {
        $sudah_bayar = NotaBon::sudahBayar()->latest();
        $belum_bayar = NotaBon::belumBayar()->latest();

        if($this->tanggal_awal && $this->tanggal_akhir){
            
            $sudah_bayar->periode($this->tanggal_awal, $this->tanggal_akhir);
            $belum_bayar->periode($this->tanggal_awal, $this->tanggal_akhir);
        }

        if($this->status){

            $sudah_bayar->where('status', $this->status);
            $belum_bayar->where('status', $this->status);

        }

        $data['sudah_bayar'] = $sudah_bayar->sum('nominal');
        $data['belum_bayar'] = $belum_bayar->sum('nominal');

        return view('livewire.nota-bon.nota-bon-over-view' , $data);
    }

    public function filterTable($data){        
       
        $this->tanggal_awal = $data['tanggal_awal'];
        $this->tanggal_akhir = $data['tanggal_akhir'];       
    }

    public function updateOverView(): void 
    {
        // youre code here
    }
}
