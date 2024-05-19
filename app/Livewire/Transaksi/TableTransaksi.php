<?php

namespace App\Livewire\Transaksi;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\WithPagination;
use App\Exports\ExportPemasukan;
use Maatwebsite\Excel\Facades\Excel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TableTransaksi extends Component
{

    use LivewireAlert;
    use WithPagination;

    public $search;
    public $selected_id;

    public $tanggal_awal;
    public $tanggal_akhir;

    public $modalForm = false;
    public $modalType = "create";

    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan;
    public $kas_id;   
    public $kategori_id;   

    public $record;


    protected $listeners = [
        'confirmed', 'filterTable'
    ];

    public function mount(){

        // $this->tanggal_awal = date('Y-01-01');
        // $this->tanggal_akhir = date('Y-m-d');

        $this->tanggal = date('Y-m-d');
    }
    
    public function render()
    {
        $transaksi = Transaksi::mine()->orderBy('tanggal','desc');

        if($this->tanggal_awal && $this->tanggal_akhir){
            
            $transaksi->periode($this->tanggal_awal, $this->tanggal_akhir);
        }

        if($this->kategori_id){
            $transaksi->where('kategori_id', $this->kategori_id);
        }

        if($this->search){          

            $transaksi->where('keterangan', 'like' , '%' . $this->search . '%');
        }

        $data['transaksi'] = $transaksi->paginate(10);

        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::where('type', $this->type)->get();
        
        return view('livewire.transaksi.table-transaksi' , $data);
    }


    public function delete($id){

        $this->selected_id = $id;  

        $this->alert('warning', 'Yakin ingin dihapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',
            'showCancelButton' => true,
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
        $record = Transaksi::findOrFail($this->selected_id);

        $record->delete();

        $this->dispatch('updateOverView');

        $this->alert('success', "Data Berhasil Dihapus");
    }

    public function export(){

        return Excel::download(new ExportPemasukan(), 'pemasukan.xlsx');
    }

    public function filterTable($data){

        $this->tanggal_awal = $data['tanggal_awal'];
        $this->tanggal_akhir = $data['tanggal_akhir'];
        $this->kategori_id = $data['kategori_id'];
    }

    public function tambah(){       

        $this->reset();

        $this->tanggal = date('Y-m-d');

        $this->modalForm = true;       
    }


    public function create(){

        $this->validate([
            'nominal' => 'required', 
            'kategori_id' => 'required',
            'kas_id' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        $metode_bayar = Kas::find($this->kas_id);

        Transaksi::create([
            'tanggal' => $this->tanggal,
            'type' => $this->type,
            'nominal' => $this->nominal,
            'keterangan' => $this->keterangan,
            'kategori_id' => $this->kategori_id,
            'user_id' => auth()->user()->id,
            'kas_id' => $this->kas_id,
            'metode_bayar' => $metode_bayar->type
        ]);        

        $this->reset();

        // $this->dispatch('tutupModal');

        // return redirect()->route('pengeluaran');

        $this->dispatch('updateOverView');

        $this->alert('success', 'Data Berhasil Disimpan');
    }

    public function edit($id){
     
        $this->modalType = "update";

        $this->selected_id = $id;
        $this->record = Transaksi::find($id);

        $this->tanggal = $this->record->tanggal;
        $this->nominal = $this->record->nominal;        
        $this->metode_bayar = $this->record->metode_bayar;
        $this->keterangan = $this->record->keterangan;
        $this->kas_id = $this->record->kas_id;   
        $this->kategori_id = $this->record->kategori_id;

        $this->modalForm = true;
    }

    public function update(){

        $record = Transaksi::find($this->selected_id);

        $record->tanggal = $this->tanggal;
        $record->nominal = $this->nominal;       
        $record->metode_bayar = $this->metode_bayar;
        $record->keterangan = $this->keterangan;
        $record->kas_id = $this->kas_id;   
        $record->kategori_id = $this->kategori_id;
        $record->type = $this->type;
        $record->save();


        $this->modalForm = false;

        $this->dispatch('updateOverView');
        
        $this->alert('success', 'Data Berhasil Diupdate');
        
    }
}
