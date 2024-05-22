<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";

    protected $guarded = [];

    public function transaksi(){

        return $this->hasMany(Transaksi::class, 'kategori_id');
    }

    public function scopePengeluaran($query){

        return $query->where('type', "Pengeluaran");
    }

    public function scopePemasukan($query){

        return $query->where('type', "Pemasukan");
    }

    public function scopeMine($query){

        return $query->where('user_id', auth()->user()->id);
    }

}
