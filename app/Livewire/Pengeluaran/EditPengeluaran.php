<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use Livewire\Wireable;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;

class EditPengeluaran extends Component
{
    use LivewireAlert;
    
    public $tanggal;
    public $type = "Pengeluaran";
    public $nominal;
    public $kategory;   
    public $metode_bayar;
    public $keterangan = "tes";
    public $kas_id;   
    public $kategori_id;

    public $pengeluaran;

    public function mount(Transaksi $pengeluaran){     
       

       $this->tanggal = $pengeluaran->tanggal;       
       $this->nominal = $pengeluaran->nominal;
       $this->kategori_id = $pengeluaran->kategori_id;
       $this->keterangan = $pengeluaran->keterangan;
       $this->kas_id = $pengeluaran->kas_id;
       
       $this->pengeluaran = $pengeluaran;    


    }

    public function render()
    {       
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.edit-pengeluaran', $data);
    }

    public function save(){

        $this->validate([
            'nominal' => 'required', 
            'kategori_id' => 'required',
            'kas_id' => 'required',
            'tanggal' => 'required'
        ]);

        $metode_bayar = Kas::find($this->kas_id);

        Transaksi::where('id', $this->pengeluaran->id)->update([
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
