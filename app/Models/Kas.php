<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;

    protected $table = "kas";

    protected $guarded = [];

    public function transaksi(){

        return $this->hasMany(Transaksi::class, 'kas_id');
    }

    public function scopeBank($query){

        return $query->where('type', 'Bank');
    }

    public function scopeCash($query){

        return $query->where('type', 'Cash');
    }

    public function scopeMine($query){

        return $query->where('user_id', auth()->user()->id);
    }

    public function scopeRangeDate($query, $start , $end){

        return $query->whereDate('created_at', '>' ,$start)->whereDate('created_at', '<=' , $end);
    }

    public static function getSaldoAwal($start_date , $end_date){

        // saldo awal diambil dari saldo pertama masing2 kas
        // untuk data global saldo masing2 kas di jumlahkan menjadi satu
        // untuk bulan berikutnya, saldo awal diambil dari saldo terakhir bulan sebelumnya

        $saldo_kas = Kas::mine()->rangeDate($start_date , $end_date)->sum('saldo_awal');        
       
        return $saldo_kas;
    }
}
