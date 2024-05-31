<?php

namespace App\Livewire\Berlangganan;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class TableHistoryOrder extends Component
{
    use WithPagination;
    
    public function render()
    {
        $orders = Order::mine()->paginate(5);      

        return view('livewire.berlangganan.table-history-order' , compact('orders'));
    }

    public function Bayar($id){

        $order = Order::find($id);

        $order->status_transaksi = "Paid";
        $order->save();

        // dd($order);
    }
}
