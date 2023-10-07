<?php

namespace App\Exports;

use App\Models\Pajak;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPajak implements FromCollection  , WithMapping , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pajak::orderBy('tahun')->orderBy('bulan')->get();
    }

    public function map($row): array
    {    
        return [
            list_bulan()[ intval($row->bulan) ] ,
            $row->tahun,
            $row->jumlah,
                         
        ];
    }    

    public function headings(): array
    {
        return [
            'Bulan',
            'Tahun',
            'Jumlah',            
        ];
    }
}
