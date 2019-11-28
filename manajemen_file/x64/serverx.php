<?php

// notice mati
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$dir = "assets/Apps/Serverx/x64";

$directiory_file = opendir($dir);
$file = readdir($directiory_file);
if (is_dir($dir)) {
    if ($directiory_file = opendir($dir)) {
        $arr_serverx64 = array();
        while (($file = readdir($directiory_file)) !== false) {
            $tampungData = array($file);
            // tampilkan nm file
            $dataStringArray = implode("|", $tampungData);
            // gunakan fungsi regex untuk ambil krakter versi
            preg_match('/((\d+).(\d+).(\d+).(\d+))/', $dataStringArray, $matches);
            // gunakan fungsi regex utk ambil karakter bit versi
            preg_match('/(x(\d+))/', $dataStringArray, $karakter_versi_bit);
            // hitung
            $major = $matches[2]  * 1000000;
            $minor = $matches[3] *  10000;
            $revision = $matches[4] * 100;
            $build = $matches[5] * 1;
            $total = intval($major) + intval($revesion) + intval($revision) + intval($build);

            array_push($arr_serverx64, $dataStringArray);
        }
    }
    print_r(max($arr_serverx64));
}
?>