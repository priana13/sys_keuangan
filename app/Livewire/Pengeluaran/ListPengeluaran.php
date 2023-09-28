<?php

namespace App\Livewire\Pengeluaran;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListPengeluaran extends Component
{
    use LivewireAlert;

    public $tanggal;
    public $type = "Pengeluaran";
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
        $data['kategori'] = Kategori::all();

        return view('livewire.pengeluaran.list-pengeluaran', $data);
    }

    public function save(){

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

        $this->alert('success', 'Data Berhasil Disimpan');
    }
}
