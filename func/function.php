<?php
function batasi_kata($kalimat_lengkap, $jumlah_kata)
{
    $arr_str = explode(' ', $kalimat_lengkap);
    $arr_str = array_slice($arr_str, 0, $jumlah_kata);
    return implode(' ', $arr_str);
}

