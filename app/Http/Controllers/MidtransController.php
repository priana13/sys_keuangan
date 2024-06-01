<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Membership;
use Illuminate\Http\Request;

class MidtransController extends Controller
{

public $transaksi;

   public $notif;

   public $va_number = null;

    public function __construct(){

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
    }

    public static function getSnapToken(Order $order){      

        // Se t your Merchant Server Key
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
        
        $order->snap_token = $snapToken;
        $order->save();

        return $snapToken;

    }


    public function getHargaDiscount($harga , $disc){

        $discount = $harga * $disc / 100;

        $harga_baru = $harga - $discount;

        return $harga_baru;
    }

    public function callback(Request $request)
    {

        $notif = new \Midtrans\Notification();        

        // \DB::transaction(function() use($notif) {

            //midtrans notif 
            $order_id = $notif->order_id;

            $transaksi = Order::where('kode_transaksi', $order_id)->first();

            $this->transaksi = $transaksi;

            $this->notif = $notif;                

            $payment_type = $notif->payment_type;

            if($payment_type == 'echannel'){

              $echannel = [
                'biller_code' =>  $notif->biller_code,
                'bill_key' =>  $notif->bill_key
              ];

              $this->va_number = "Bill Code: " . $notif->biller_code . ", Bill Key: " . $notif->bill_key;

            }elseif( in_array($payment_type , ['gopay', 'qris']) ){ 

              $this->va_number = '-';

            }else{

              $va_number    = $notif->va_numbers[0]; 
              $this->va_number = $notif->va_numbers[0]->va_number;  

              
            }

            // dd($this->va_number);
          

            // inisialisasi woo wa
            // $whatsapp_notif = new Woowa();
          
            $transaction = $notif->transaction_status;         

            $type = $notif->payment_type;           
            $fraud = $notif->fraud_status;

            /** Ambil data konfirmasi */
                     
         
          if ($transaction == 'capture') {

            if ($type == 'credit_card') {

              if($fraud == 'challenge') {

                // $donation->setStatusPending();

              } else {

                // $donation->setStatusSuccess();

              }

            }
          } elseif ($transaction == 'settlement') {

            $transaksi->status_transaksi = 'Paid';     
            
            Membership::tambahAkses($transaksi->user_id , $transaksi->paket_berlangganan->kapasitas);

            // tambahkan langganan sesuai paket yang dipesan
            // $hari_ini = Carbon::now(); 
            // $bulan_depan = $hari_ini->addMonth($transaksi->paket_berlangganan->kapasitas);
            // $invoice_date = $bulan_depan->addDay(-7);

            // Membership::create([ 
            //     'user_id' => $transaksi->user_id,               
            //     'start_date' =>  Carbon::now(),
            //     'expired_date' => $bulan_depan,
            //     'invoice_date' => $invoice_date,
            //     'status' => "Aktif"                
            // ]);        

            
            /**Kirim notifikasi ke whatsap */
                

            	/**
               * kirim notifikasi ke email
               */

            //    $this->send_completed_mail();
    
          } elseif($transaction == 'pending'){ 
              
            
            // kiri pesan whatsapp pending                     

            
              	/**
                 * kirim notifikasi ke email
                 */

                // $this->sendPendingMail();
                
                // $donation->save();

          } elseif ($transaction == 'deny') {

            $transaksi->status_transaksi = 'deny';

          } elseif ($transaction == 'expire') {

            $transaksi->status_transaksi = 'expired';

          } elseif ($transaction == 'cancel') {

            $transaksi->status_transaksi = 'cancel';

          }


          $transaksi->save();

          return \response()->json(['success'] , 200);

        // penutup db transaction
        // });
    }
}
