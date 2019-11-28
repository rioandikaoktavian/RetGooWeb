<?php
    

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $filename = $_GET['wsm64'];
    $back_dir = "assets/Apps/WSM/2.0/windows/x64/";
    $file = $back_dir . $_GET['server64'];
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
        $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
        header("location:index.php");
    }
} else {
    echo 'Os terdeteksi Linux';
}
// } else {
//     echo "
//     <SCRIPT type='text/javascript'> //not showing me this
//     alert('Os terdeteksi Linux');
//     window.location.replace(\"index.php\");
//     </SCRIPT>
//     ";
// }
