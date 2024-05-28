<?php

namespace App\Livewire\Berlangganan;

use App\Models\Product;
use Livewire\Component;

class HalamanBerlangganan extends Component
{
    public $list_product;

    public function mount(){

        $this->list_product = Product::getProduct();       
       
    }

    public function render()
    {       

        return view('livewire.berlangganan.halaman-berlangganan');
    }

    public function  BeliSekarang($id){

        $product = Product::find($id);

        dd($product);

        dd('test');
    }
}
