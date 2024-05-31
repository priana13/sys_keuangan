<?php

namespace App\Livewire\Berlangganan;

use App\Models\Order;
use App\Models\PaketBerlangganan;
use Livewire\Component;

class HalamanBerlangganan extends Component
{
    public $list_product;

    public $type = "product";

    public $my_order;

    public function mount(){

        $this->list_product = PaketBerlangganan::orderBy('id' , 'desc')->get();        
       
       
    }

    public function render()
    {       
        $this->my_order = Order::mine()->pending()->count();

        return view('livewire.berlangganan.halaman-berlangganan');
    }

    public function  BeliSekarang($id){

        $paket = PaketBerlangganan::find($id);

        // Buat Order Baru 

          $order = Order::create([            
            "kode_transaksi" => \uniqid(),
            "user_id" => auth()->user()->id,
            "tanggal" => now(),
            "nominal" => $this->getHargaDiscount($paket->harga, $paket->disc),
            "paket_berlangganan_id" => $id          

          ]);

        //   dd($order);

        // tampilkan pembayaran midtrans
      
      
    }



    public function getHargaDiscount($harga , $disc){

        $discount = $harga * $disc / 100;

        $harga_baru = $harga - $discount;

        return $harga_baru;
    }

    public function pilihType($type){

        $this->type = $type;
    }
}
