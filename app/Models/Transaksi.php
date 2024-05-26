<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";

    protected $guarded = [];

    public function kategori(){

        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function kas(){

        return $this->belongsTo(Kas::class, 'kas_id');
    }

    public function scopeMine($query){
        
        return $query->where('user_id', auth()->user()->id);
    }

    public function scopePengeluaran($query){

        return $query->where('type', "Pengeluaran");
    }

    public function scopePemasukan($query){

        return $query->where('type', "Pemasukan");
    }

    public function scopeHariIni($query){

        return $query->where('tanggal', date('Y-m-d'));
    }

    public function scopeBulanIni($query){

        return $query->whereYear('tanggal', date('Y'))->whereMonth('tanggal', date('m'));
    }

    public function scopePeriode($query, $start, $end){

        return $query->whereDate('tanggal', '>=', $start)->whereDate('tanggal', '<=', $end);
    }


}
