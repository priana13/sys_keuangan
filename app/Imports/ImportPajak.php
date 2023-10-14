<?php

namespace App\Imports;

use App\Models\Pajak;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportPajak implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pajak([
            "bulan" => $row['bulan'],
            "tahun" => $row['tahun'],
            "jumlah" => $row['jumlah']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
