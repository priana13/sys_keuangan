<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    // public function __construct(){

    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('app.services.midtrans.serverKey');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;
        
    // }

    public static function getSnapToken(Order $order){      

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->kode_transaksi,
                'gross_amount' => $order->nominal,
            ),
            'customer_details' => array(
                'first_name' => $order->user->name,
                'last_name' => '',
                'email' => $order->user->email,                
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);     

        return $snapToken;

    }


    public function getHargaDiscount($harga , $disc){

        $discount = $harga * $disc / 100;

        $harga_baru = $harga - $discount;

        return $harga_baru;
    }
}
