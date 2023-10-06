<?php

namespace App\Livewire\Admin;

use App\Models\Transaksi;
use Livewire\Component;

class CardOverView extends Component
{
    public function render()
    {
        $data['pemasukan_hari_ini'] = Transaksi::pemasukan()->where('tanggal', date('Y-m-d'))->sum('nominal');
        $data['pengeluaran_hari_ini'] = Transaksi::pengeluaran()->where('tanggal', date('Y-m-d'))->sum('nominal');

        
        $data['pemasukan_bulan_ini'] = Transaksi::pemasukan()->whereMonth('tanggal', date('m'))->whereYear('tanggal', date('Y'))->sum('nominal');
        $data['pengeluaran_bulan_ini'] = Transaksi::pengeluaran()->whereMonth('tanggal', date('m'))->whereYear('tanggal', date('Y'))->sum('nominal');

        return view('livewire.admin.card-over-view', $data);
    }
}
