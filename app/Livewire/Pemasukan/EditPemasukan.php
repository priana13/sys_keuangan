<?php

namespace App\Livewire\Pemasukan;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPemasukan extends Component
{
    use LivewireAlert;

    public $tanggal;
    public $type = "Pemasukan";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan;
    public $kas_id;   
    public $kategori_id;

    public $pemasukan;

    public function mount(Transaksi $pemasukan){        

        $this->tanggal = $pemasukan->tanggal;       
        $this->nominal = $pemasukan->nominal;
        $this->kategori_id = $pemasukan->kategori_id;
        $this->keterangan = $pemasukan->keterangan;
        $this->kas_id = $pemasukan->kas_id;
        
        $this->pemasukan = $pemasukan;     
 
     }

    public function render()
    {
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();
        
        return view('livewire.pemasukan.edit-pemasukan', $data);
    }


    public function save(){

        $this->validate([
            'nominal' => 'required', 
            'kategori_id' => 'required',
            'kas_id' => 'required',
            'tanggal' => 'required'
        ]);

        $metode_bayar = Kas::find($this->kas_id);

        Transaksi::where('id', $this->pemasukan->id)->update([
            'tanggal' => $this->tanggal,           
            'nominal' => $this->nominal,
            'keterangan' => $this->keterangan,
            'kategori_id' => $this->kategori_id,          
            'kas_id' => $this->kas_id,
            'metode_bayar' => $metode_bayar->type
        ]);   


        $this->alert('success', "Data berhasil diubah");


    }


}
