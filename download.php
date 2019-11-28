<?php

if (isset($_GET['portal86'])) {
    $filename    = $_GET['portal86'];
    $back_dir    = "assets/Apps/Portal/x86/";
    $file = $back_dir . $_GET['portal86'];
} elseif (isset($_GET['portal64'])) {
    $filename    = $_GET['portal64'];
    $back_dir    = "assets/Apps/Portal/x64/";
    $file = $back_dir . $_GET['portal64'];
} else if (isset($_GET['studio86'])) {
    $filename    = $_GET['studio86'];
    $back_dir    = "assets/Apps/Studio/x86/";
    $file = $back_dir . $_GET['studio86'];
} else if (isset($_GET['studio64'])) {
    $filename    = $_GET['studio64'];
    $back_dir    = "assets/Apps/Studio/x64/";
    $file = $back_dir . $_GET['studio64'];
} else if (isset($_GET['wsm'])) {
    $filename    = $_GET['wsm'];
    $back_dir    = "assets/Apps/WSM/2.0/windows/x64/";
    $file = $back_dir . $_GET['wsm'];
} else if (isset($_GET['server86'])) {
    $filename = $_GET['server86'];
    $back_dir = "assets/Apps/ServerX/x86/";
    $file = $back_dir . $_GET['server86'];
} else if (isset($_GET['server64'])) {
    $filename = $_GET['server64'];
    $back_dir = "assets/Apps/ServerX/x64/";
    $file = $back_dir . $_GET['server64'];
} elseif (isset($_GET['wsm64'])) {
    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
        $filename = $_GET['wsm64'];
        $back_dir = "assets/Apps/WSM/2.0/windows/x64/";
        $file = $back_dir . $_GET['wsm64'];
    }
}else if (isset($_GET['wsm86'])) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $filename = $_GET['wsm86'];
        $back_dir = "assets/Apps/WSM/2.0/windows/x86/";
        $file = $back_dir . $_GET['wsm86'];
    }
}

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: private');
    header('Pragma: private');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);

    exit;
} else {
    echo "
    <SCRIPT type='text/javascript'> //not showing me this
    alert('Terjadi Kesalahan');
    window.location.replace(\"index.php\");
    </SCRIPT>
    ";
}
