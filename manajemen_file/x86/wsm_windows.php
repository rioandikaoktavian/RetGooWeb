<?php
include 'file_location.php';

// notice mati
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$dir = $lokasi . "WSM/2.0/windows/x86/";

$directory_file = opendir($dir);
$file = readdir($directory_file);
if (is_dir($dir)) {
    if ($directory_file = opendir($dir)) {
        $arr_wsm_windows86 = array();
        while (($file = readdir($directory_file)) !== false) {
            $tampungData = array($file);
            // tampilkan nm file
            $dataStringArray = implode("|", $tampungData);
            // gunakan fungsi regex utk ambil karakter versi
            preg_match('/((\d+).(\d+).(\d+).(\d+).)/', $dataStringArray, $matches);
            // gunakan fungsi regex utk ambil karakter bit versi
            preg_match('/(x(\d+))/', $dataStringArray, $karakter_versi_bit);
            // hitung
            $major = $matches[2] * 1000000;
            $minor = $matches[3] * 10000;
            $revision = $matches[4] * 100;
            $build = $matches[5] * 1;
            $total = intval($major) + intval($minor) + intval($revision) + intval($build);

            array_push($arr_wsm_windows86, $dataStringArray);
        }
    }
}
