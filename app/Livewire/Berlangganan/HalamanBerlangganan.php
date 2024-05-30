<?php

namespace App\Livewire\Berlangganan;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class HalamanBerlangganan extends Component
{
    public $list_product;

    public $type;

    public function mount(){

        $this->list_product = Product::orderBy('id' , 'desc')->get();       
       
    }

    public function render()
    {       

        return view('livewire.berlangganan.halaman-berlangganan');
    }

    public function  BeliSekarang($id){

        $product = Product::find($id);

        // Buat Order Baru 

          $order = Order::create([            
            "kode_transaksi" => \uniqid(),
            "user_id" => auth()->user()->id,
            "tanggal" => now(),
            "nominal" => $this->getHargaDiscount($product->harga, $product->disc),
            "product_id" => $id          

          ]);

          dd($order);

        // tampilkan pembayaran midtrans
      
      
    }



    public function getHargaDiscount($harga , $disc){

        $discount = $harga * $disc / 100;

        $harga_baru = $harga - $discount;

        return $harga_baru;
    }
}
