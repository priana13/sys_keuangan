<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;

    protected $table = "kas";

    protected $guarded = [];

    public function scopeBank($query){

        return $query->where('type', 'bank');
    }

    public function scopeCash($query){

        return $query->where('type', 'cash');
    }
}
