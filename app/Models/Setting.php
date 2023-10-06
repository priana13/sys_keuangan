<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "setting";

    protected $guarded = [];

    public static function getData($name){

        $setting = Setting::where('name' , $name)->first();

        if(!$setting){

            $setting = self::create([
                'name' => $name,
                'value' => ''
            ]);
        }

        return $setting;
    }

    public static function setData(string $name , string | int | null $value){
       

        $setting = Setting::where('name' , $name)->first();

        if(!$setting){

            $setting = self::create([
                'name' => $name,
                'value' => $value
            ]);
        }else{

            $setting->value = $value;
            $setting->save();
        }

        return $setting;
    }
    
}
