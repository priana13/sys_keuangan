<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    use HasFactory;

    protected $table = "pajak";

    protected $guarded = [];

    public function scopeTahunIni($query){

        return $query->where('tahun', date('Y'));
    }

    public function scopeBulanIni($query){

        return $query->where('bulan', date('m'))->tahunIni();
    }

    public function scopePeriode($query, $start, $end){

        $tahun_awal = date('Y', strtotime($start));
        $tahun_akhir = date('Y', strtotime($end));

        $bulan_awal = date('m', strtotime($start));
        $bulan_akhir = date('m', strtotime($end));

        return $query->where('bulan', '>=', $bulan_awal)->where('tahun', '>=', $tahun_awal)
                      ->where('bulan', '<=', $bulan_akhir)->where('tahun', '<=', $tahun_akhir);

    }

}
