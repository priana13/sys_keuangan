<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function product(){

        return $this->belongsTo(Product::class, 'product_id');
    }

    public function scopePending($query){

        return $query->where('status_transaksi' , "Pending");
    }

    public function scopeMine($query){

        return $query->where('user_id' , auth()->user()->id);
    }
}
