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

    public function scopePengeluaran($query){

        return $query->where('type', "Pengeluaran");
    }

    public function scopePemasukan($query){

        return $query->where('type', "Pemasukan");
    }

    protected function tanggal(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Date('d M Y', strtotime($value)),
        );
    }



}
