<?php
function nama_fungsi($hari){
    switch ($hari) {
        case 1:
            return 'Hari Senin';
            break;
        case 2:
            return 'Hari Selasa';
            break;
        case 3:
            return 'Hari Rabu';
            break;
        case 4:
            return 'Hari Kamis';
            break;
        case 5:
            return "Hari Jum'at";
            break;
        case 6:
            return 'Hari Sabtu';
            break;
        case 7:
            return 'Hari Minggu';
            break;
        default:
            return 'Nama hari cuma ada 7!';
            break;
    }
}

function penambahan($satu = 1, $dua = 2){
    return $satu + $dua;
}

function pengurangan($satu = 1, $dua = 2){
    return $satu - $dua;
}

function satu($param){
    $word = dua();
    $functionLain = lain();
    return $param . $word;
}

function dua(){
    return "dua";
}
