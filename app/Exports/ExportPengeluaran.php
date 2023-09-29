<?php

namespace App\Exports;

use Carbon\Traits\Date;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPengeluaran implements FromCollection , WithMapping , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaksi::pengeluaran()->get();
    }

    
    public function map($transaksi): array
    {          

        return [
            $transaksi->tanggal,
            $transaksi->type,
            $transaksi->keterangan,  
            $transaksi->kategori->nama,
            $transaksi->kas->nama,
            $transaksi->metode_bayar,
            $transaksi->nominal,
                         
        ];
    }    

    public function headings(): array
    {
        return [
            'Tanggal',
            'Type',
            'Keterangan',
            "Kategori",
            "Kas",
            "Metode Bayar",
            "Nominal"
        ];
    }

}
