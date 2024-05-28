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
    public $keterangan;
    public $suplier;
    public $nominal;
    public $status = 'Belum Bayar';

    public $nama;

    public array $warna = [
        'Sudah Bayar' => 'green',
        'Belum Bayar' => 'red'
    ];

    protected $listeners = [
        'confirmed',
        'filterTable'
    ];

    public function mount(){

        $this->tanggal = date('Y-m-d');
    }

    public function render()
    {

        $nota_bon = NotaBon::mine()->orderBy('tanggal','desc');


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

        $this->dispatch('updateOverView');

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
            'nominal' => 'required',
            'keterangan' => 'required',
            'nama' => 'required'            
        ]);

        NotaBon::create([
            'user_id' => auth()->user()->id,
            'tanggal' => $this->tanggal,
            'keterangan' => $this->keterangan,
            'nominal' => $this->nominal,
            'nama_suplier' => $this->nama,
            'status' => $this->status
        ]);

        $this->dispatch('updateOverView');

        $this->alert('success', "Data Berhasil disimpan");

        return redirect('nota-bon');
    }

    public function edit($id){

        $this->reset();
     
        $this->modalType = "update";

        $this->selected_id = $id;
        $this->record = NotaBon::find($id);

        $this->tanggal = $this->record->tanggal;
        $this->nominal = $this->record->nominal;        
        $this->nama = $this->record->nama_suplier;
        $this->status = $this->record->status;      
        $this->keterangan = $this->record->keterangan;  

        $this->modalForm = true;
    }

    public function update(){

        $this->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required',
            'nama' => 'required'            
        ]);

        $record = NotaBon::find($this->selected_id);

        $record->keterangan = $this->keterangan;
        $record->tanggal = $this->tanggal;
        $record->nominal = $this->nominal;       
        $record->nama_suplier = $this->nama;
        $record->status = $this->status;       
        $record->save();

        $this->dispatch('updateOverView');

        $this->modalForm = false;
        $this->alert('success', 'Data Berhasil Diupdate');
        
    }
}
