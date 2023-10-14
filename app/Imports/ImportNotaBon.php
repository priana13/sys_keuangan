<?php

namespace App\Imports;

use App\Models\NotaBon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportNotaBon implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // $table->date('tanggal');
        // $table->string('nama_suplier',100);
        // $table->integer('total');
        // $table->string('status', 20); // Sudah Dibayar , Belum Dibayar

        return new NotaBon([
            "tanggal" => $row['tanggal'],
            "nama_suplier" => $row['nama_suplier'],
            "total" => $row['total'],
            "status" => $row['status']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
