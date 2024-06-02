<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Membership;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeAktif($query){

        return $query->where('status' , 'Aktif');
    }

    
    /**
     * Method tambahAkses
     *
     * @param int $user_id [user]
     * @param int $kapasitas [jumlah bulan]
     *
     * @return void
     */
    public static function tambahAkses(int $user_id , int $kapasitas): void
    {

        $hari_ini = Carbon::now(); 
        $bulan_depan = $hari_ini->addMonth($kapasitas);
        $invoice_date = $bulan_depan->addDay(-7);

        $membership_user = self::where('user_id' , $user_id)->first();

        if(!$membership_user){

            self::create([ 
                'user_id' => $user_id,               
                'start_date' =>  $hari_ini,
                'expired_date' => $bulan_depan,
                'invoice_date' => $invoice_date,
                'status' => "Aktif"                
            ]);

        }else{

            $membership_user->start_date = $hari_ini;
            $membership_user->expired_date = $bulan_depan;
            $membership_user->invoice_date = $invoice_date;
            $membership_user->status = 'Aktif';
            $membership_user->save();
        }       



    }

    public static function getSisaHari($expired_date):int 
    { 
        $sisa_hari = Carbon::now()->diff($expired_date);

        return $sisa_hari->d;

    }


}
