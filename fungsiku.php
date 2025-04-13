<?php
/** 
 * fungsi untuk menghitung nilai akhir mahasiswa
 * @param float $nilai_uts Nilai UTS (0-100)
 * @param float $nilai_uas Nilai UAS (0-100)
 * @param float $nilai_tugas Nilai Tugas (0-100)
 * @return float Nilai Akhir (0-100)
*/
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 25);
    define("NILAI_UAS", 30);
    define("BOBOT_TUGAS", 0.45);
    $nilai_akhir = (NILAI_UTS*$nilai_uts) + (NILAI_UAS*$nilai_uas) + (NILAI_TUGAS*$nilai_tugas);
    return $nilai_akhir;
}

function kelulusan($nilai){
    define("NILAI_lulus", 60);
    if($nilai >= NILAI_LULUS){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}