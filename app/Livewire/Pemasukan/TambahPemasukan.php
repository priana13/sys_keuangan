<?php

namespace App\Livewire\Pemasukan;

use App\Models\Kas;
use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TambahPemasukan extends Component
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

    public function mount(){

        $this->tanggal = date('Y-m-d');
    }

    public function render()
    {
        $data['kas'] = Kas::all();
        $data['kategori'] = Kategori::pemasukan()->get();

        return view('livewire.pemasukan.tambah-pemasukan', $data);
    }

    public function save(){

        $this->validate([
            'nominal' => 'required', 
            'kategori_id' => 'required',
            'kas_id' => 'required',
            'tanggal' => 'required'
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

        return redirect()->route('pengeluaran');

        $this->alert('success', 'Data Berhasil Disimpan');
    }
}
