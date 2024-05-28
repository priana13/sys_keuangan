<?php

namespace App\Models;

use App\Models\Kas;
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

        // dd($start);

        return $query->whereDate('tanggal', '>=', $start)->whereDate('tanggal', '<=', $end);
    }

    // public static function getSaldoAkhir(){
        
    //     return 
    // }

    public static function getSaldoAwal($start_date , $end_date){

        // 1. Saldo awal dari kas
        // 2. Saldo awal dari saldo bulan terakhir

        $saldo_awal_kas = Kas::getSaldoAwal(
            $start_date, $end_date
        );

        $saldo_awal = $saldo_awal_kas + self::getSaldoAkhirBulanLalu($start_date , $end_date);

        return $saldo_awal;
    }    


    public static function getSaldoAkhirBulanLalu($start_date , $end_date){



        $total_pemasukan = self::mine()->pemasukan()->whereDate('tanggal' , '<' , $start_date)->sum('nominal');

        $total_pengeluaran = self::mine()->Pengeluaran()->whereDate('tanggal' , '<' , $start_date)->sum('nominal');

        $saldo = $total_pemasukan - $total_pengeluaran;     

        return $saldo;
    }


    public static function getTotalPemasukan($start_date , $end_date){

        return self::mine()->pemasukan()->periode($start_date, $end_date)->sum('nominal');
    }


    public static function getTotalPengeluaran($start_date , $end_date){

        return self::mine()->pengeluaran()->periode($start_date, $end_date)->sum('nominal');
    }


    public static function getSaldoAkhir($start_date , $end_date){

        $saldo_awal_kas = Kas::getSaldoAwal($start_date, $end_date);
        $saldo_bulan_lalu = self::getSaldoAkhirBulanLalu($start_date, $end_date); // saldo akhir + tambah pemasukan
        $pemasukan = self::getTotalPemasukan($start_date, $end_date);
        $total_pemasukan  = $saldo_awal_kas + $saldo_bulan_lalu + $pemasukan;

        $pengeluaran = self::getTotalPengeluaran($start_date, $end_date);

        $saldo_akhir = $total_pemasukan - $pengeluaran;

        return $saldo_akhir;

    }


}
