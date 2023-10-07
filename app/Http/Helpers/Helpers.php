<?php 



function number(int $number , bool | null $mata_uang = false , int | null $belakang_koma = 0 , ){

    if($mata_uang){

        return "Rp. " . number_format($number, $belakang_koma, ',', '.');

    }

    return number_format($number, $belakang_koma, ',', '.');
}


function rupiah(int $number , int | null $belakang_koma = 0 , ){

    return "Rp. " . number_format($number, $belakang_koma, ',', '.');

}

function tgl($tanggal){

    return date('d M Y', strtotime($tanggal));

}

function list_bulan(){   

    return [
        "1" => "Januari",
        "2" => "Februari",
        "3" => "Maret",
        "4" => "April",
        "5" => "Mei",
        "6" => "Juni",
        "7" => "Juli",
        "8" => "Agustus",
        "9" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "Desember"

    ];
   
}