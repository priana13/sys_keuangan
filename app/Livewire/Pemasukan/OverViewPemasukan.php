<?php

namespace App\Livewire\Pemasukan;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Transaksi;

class OverViewPemasukan extends Component
{
    public int $totalHariIni;

    public int $totalBulanIni;

    public int $totalBand;

    public function render()
    {
        $kategori = Kategori::where('type','Pemasukan')->get();

        $this->totalHariIni = Transaksi::hariIni()->sum('nominal');
        $this->totalBulanIni = Transaksi::bulanIni()->sum('nominal');

        return view('livewire.pemasukan.over-view-pemasukan', compact('kategori'));
    }
}
