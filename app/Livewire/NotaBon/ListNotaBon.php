<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportNotabon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListNotaBon extends Component
{
    use LivewireAlert;
    
    public $selected_id;

    public $tanggal_awal;
    public $tanggal_akhir;
    public $status;

    protected $listeners = [
        'confirmed',
        'filterTable'
    ];

    public function render()
    {

        $nota_bon = NotaBon::latest();


        if($this->tanggal_awal && $this->tanggal_akhir){
            
            $nota_bon->periode($this->tanggal_awal, $this->tanggal_akhir);
        }

        if($this->status){           

            $nota_bon->where('status', $this->status);
        }

        $data['nota_bon'] = $nota_bon->paginate(10);

        return view('livewire.nota-bon.list-nota-bon',$data);
    }

    public function delete($id){

        $this->selected_id = $id;  

        $this->alert('warning', 'Yakin ingin dihapus?', [
            'showCancelButton' => true,
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',            
            'confirmButtonColor' => '#ed4e73',
            'cancelButtonText' => 'Cancel',
            'toast' => false,
            'position' => 'center',
            'onConfirmed' => 'confirmed',
            'timer' => null
        ]); 

    }

    public function confirmed()
    {
        $record = NotaBon::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    } 

    public function export(){

        return Excel::download(new ExportNotabon(), 'nota-bon.xlsx');
    }

    public function filterTable($data){

        $this->tanggal_awal = $data['tanggal_awal'];
        $this->tanggal_akhir = $data['tanggal_akhir'];
        $this->status = $data['status'];
    }
}
