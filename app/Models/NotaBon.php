<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaBon extends Model
{
    use HasFactory;

    protected $table = "nota_bon";

    protected $guarded = [];

    public function scopeSudahBayar($query){

        return $query->where('status', 'Sudah Bayar');
    }

    public function scopeMine($query){

        return $query->where('user_id', auth()->user()->id);
    }

    public function scopeBelumBayar($query){

        return $query->where('status', 'Belum Bayar');
    }

    public function scopePeriode($query, $start, $end){

        return $query->whereDate('tanggal', '>=', $start)->whereDate('tanggal', '<=', $end);
    }

}
