<?php

namespace App\Imports;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportPengeluaran implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        // array:7 [▼ // app/Imports/ImportPengeluaran.php:17
        //     0 => "tanggal"
        //     1 => "type"
        //     2 => "keterangan"
        //     3 => "kategori"
        //     4 => "kas"
        //     5 => "metode_bayar"
        //     6 => "nominal"
        // ]     

        $kas = Kas::where('nama', $row['kas'])->first();
        $kategori = Kategori::pengeluaran()->where('nama', $row["kategori"])->first();     

        return new Transaksi([
            'tanggal' => $row["tanggal"],
            'type' => "Pengeluaran",
            'nominal' => $row["nominal"],
            'keterangan' => $row["keterangan"],
            'kategori_id' => $kategori->id,
            'user_id' => auth()->user()->id,
            'kas_id' => $kas->id,
            'metode_bayar' => $row["metode_bayar"]
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
