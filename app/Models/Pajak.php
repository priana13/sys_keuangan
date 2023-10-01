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

}
