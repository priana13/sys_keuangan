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