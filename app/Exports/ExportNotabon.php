<?php

namespace App\Exports;

use App\Models\NotaBon;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportNotabon implements FromCollection , WithMapping , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NotaBon::get();
    }

    public function map($transaksi): array
    {        
        
        // 'tanggal' => fake()->date(),
        // 'nama_suplier' => fake()->name(), 
        // 'total' => rand(200000,500000),
        // 'status' => fake()->randomElement(["Sudah Bayar", "Belum Bayar"])

        return [
            $transaksi->tanggal,
            $transaksi->nama_suplier,
            $transaksi->total,  
            $transaksi->status,           
                         
        ];
    }    

    public function headings(): array
    {
        return [
            'Tanggal',
            'Nama Suplier',
            'Total',
            "Status",
            
        ];
    }
}
