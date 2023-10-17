<?php

namespace App\Livewire\NotaBon;

use App\Models\NotaBon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\ExportNotabon;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListNotaBon extends Component
{
    use LivewireAlert;
    use WithPagination;
    
    public $selected_id;

    public $tanggal_awal;
    public $tanggal_akhir;
    public $filter_status;

    public $modalForm = false;
    public $modalType = "create";

    public $tanggal;
    public $suplier;
    public $total;
    public $status;
    public $nama_suplier;

    protected $listeners = [
        'confirmed',
        'filterTable'
    ];

    public function mount(){

        $this->tanggal = date('Y-m-d');
    }

    public function render()
    {

        $nota_bon = NotaBon::orderBy('tanggal','desc');


        if($this->tanggal_awal && $this->tanggal_akhir){
            
            $nota_bon->periode($this->tanggal_awal, $this->tanggal_akhir);
        }

        if($this->filter_status){           

            $nota_bon->where('status', $this->filter_status);
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
        $this->filter_status = $data['status'];
    }

    public function tambah(){       

        $this->reset();

        $this->tanggal = date('Y-m-d');

        $this->modalForm = true;       
    }

    public function create(){

        $this->validate([
            'tanggal' => 'required',
            'total' => 'required',
            'nama_suplier' => 'required'            
        ]);

        NotaBon::create([
            'tanggal' => $this->tanggal,
            'total' => $this->total,
            'nama_suplier' => $this->nama_suplier,
            'status' => $this->status
        ]);

        $this->alert('success', "Data Berhasil disimpan");

        return redirect('nota-bon');
    }

    public function edit($id){
     
        $this->modalType = "update";

        $this->selected_id = $id;
        $this->record = NotaBon::find($id);

        $this->tanggal = $this->record->tanggal;
        $this->total = $this->record->total;        
        $this->nama_suplier = $this->record->nama_suplier;
        $this->status = $this->record->status;        

        $this->modalForm = true;
    }

    public function update(){

        $this->validate([
            'tanggal' => 'required',
            'total' => 'required',
            'nama_suplier' => 'required'            
        ]);

        $record = NotaBon::find($this->selected_id);

        $record->tanggal = $this->tanggal;
        $record->total = $this->total;       
        $record->nama_suplier = $this->nama_suplier;
        $record->status = $this->status;       
        $record->save();


        $this->modalForm = false;
        $this->alert('success', 'Data Berhasil Diupdate');
        
    }
}
