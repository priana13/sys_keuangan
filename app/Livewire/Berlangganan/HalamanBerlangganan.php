<?php

namespace App\Livewire\Berlangganan;

use App\Models\Product;
use Livewire\Component;

class HalamanBerlangganan extends Component
{
    public $list_product;

    public function mount(){

        $this->list_product = Product::get();       
       
    }

    public function render()
    {       

        return view('livewire.berlangganan.halaman-berlangganan');
    }

    public function  BeliSekarang($id){

        $product = Product::find($id);

        dd($product);
      
    }

    public function getDiscount($harga , $disc){

        $discount = $harga * $disc / 100;

        $harga_baru = $harga - $discount;

        return $harga_baru;
    }
}
