<?php

namespace App\Livewire\Berlangganan;

use App\Models\Order;
use Livewire\Component;
use App\Models\Membership;
use App\Models\PaketBerlangganan;
use App\Http\Controllers\MidtransController;
use Illuminate\Support\Facades\Gate;

class HalamanBerlangganan extends Component
{
    public $list_product;

    public $type = "product";

    public $my_order;

    public $snap_token;

    public function mount(){

        $this->list_product = PaketBerlangganan::orderBy('id' , 'desc')->get();       

        // if (! Gate::allows('membership')) {          

        //     abort(403);
        // }

        
        Membership::tambahAkses(2 , 1);
        
        //  dd(auth()->user()->membership()->aktif()->first());

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

          $this->snap_token = MidtransController::getSnapToken($order);           

           $this->dispatch('snapTokenReady' , ['snap_token' => $this->snap_token]);  

           $this->type = 'history';   
      
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
