<?php

namespace App\Livewire\Pengeluaran;

use Livewire\Component;
use App\Models\Transaksi;
use Livewire\WithPagination;

class TablePengeluaran extends Component
{
    use WithPagination;

    // public $listTransaksi;

    public function render()
    {
        $transaksi = Transaksi::pengeluaran()->latest()->paginate(10);

        return view('livewire.pengeluaran.table-pengeluaran', compact('transaksi'));
    }
}
