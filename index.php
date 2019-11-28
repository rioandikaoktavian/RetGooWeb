<?php
include 'func/function.php';
include 'template/head.php';
include 'manajemen_file/x86/serverx.php';
include 'manajemen_file/x64/serverx.php';
include 'manajemen_file/x86/portal.php';
include 'manajemen_file/x64/portal.php';
include 'manajemen_file/x86/studio.php';
include 'manajemen_file/x64/studio.php';
include 'manajemen_file/x86/wsm.php';
include 'manajemen_file/x64/wsm.php';
?>

<body style="background-color: #f8f8f8;">
    <header id="header" class="header header-hide shadow " style="height: 65px;">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1>
                    <a href="#pricing" style="font-family: Poppins; font-size: 25px;" class="scrollto">
                        <img src="assets/img/RetGoo-Logo-Flat.png" alt="" height="55" width="60">
                        RetGoo Sentris Informa
                    </a>
                </h1>
            </div>
        </div>
    </header>
    <!-- HEADER -->

    <!-- ISI -->
    <section id="pricing" class="padd-section text-center wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing shadow" style="border-radius: 10px 10px; ">
                        <div class="table">
                            <div style="font-family: 'Poppins', sans-serif;">
                                <h4>SERVER</h4>
                                <h2>SERVER</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <p align="justify" style="font-family: 'Roboto', sans-serif;">
                                        <?php
                                        $kalimat_lengkap = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
                                        echo batasi_kata($kalimat_lengkap, 40);
                                        ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="table_btn">
                                <p class="separator">Lastest Version
                                    <a style="border-radius: 15px 15px; " href="download.php?server86=<?php print_r(max($arr_serverx86)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (32 bit)</a>
                                    <a style="border-radius: 15px 15px; " href="download.php?server64=<?php print_r(max($arr_serverx64)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (64 bit)</a>
                                </p>
                            </div>
                            <small>
                                <a href="" class="separator" data-toggle="modal" data-target="#modalServerx">Other Version >></a>
                            </small>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing shadow" style="border-radius: 10px 10px; ">
                        <div class="table">
                            <div style="font-family: 'Poppins', sans-serif;">
                                <h4>PORTAL</h4>
                                <h2>PORTAL</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <p align="justify" style="font-family: 'Roboto', sans-serif;">
                                        <?php
                                        $kalimat_lengkap = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
                                        echo batasi_kata($kalimat_lengkap, 40);
                                        ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="table_btn">
                                <p class="separator">Lastext Version
                                    <a style="border-radius: 15px 15px; " href="download.php?portal86=<?php print_r(max($arr_portal86)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (32 bit)</a>
                                    <a style="border-radius: 15px 15px; " href="download.php?portal64=<?php print_r(max($arr_portal64)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (64 bit)</a>
                                </p>
                            </div>
                            <small>
                                <a href="" class="separator" data-toggle="modal" data-target="#modalPortal">Other Version >></a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing shadow" style="border-radius: 10px 10px; ">
                        <div class="table">
                            <div style="font-family: 'Poppins', sans-serif;">
                                <h4>STUDIO</h4>
                                <h2>STUDIO</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <p align="justify" style="font-family: 'Roboto', sans-serif;">
                                        <?php
                                        $kalimat_lengkap = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
                                        echo batasi_kata($kalimat_lengkap, 40);
                                        ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="table_btn">
                                <p class="separator">Lastest Version
                                    <a style="border-radius: 15px 15px; " href="download.php?studio86=<?php print_r(max($arr_studio86)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (32 bit)</a>
                                    <a style="border-radius: 15px 15px; " href="download.php?studio64=<?php print_r(max($arr_studio64)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (64 bit)</a>
                                </p>
                            </div>
                            <small><a href="" data-toggle="modal" class="separator" data-target="#modalStudio">Other Version >></a></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-pricing shadow" style="border-radius: 10px 10px; ">
                        <div class="table">
                            <div style="font-family: 'Poppins', sans-serif;">
                                <h4>WSM</h4>
                                <h2>WSM</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <p align="justify" style="font-family: 'Roboto', sans-serif;">
                                        <?php
                                        $kalimat_lengkap = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
                                        echo batasi_kata($kalimat_lengkap, 40);
                                        ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="table_btn">
                                <p class="separator">Lastest Version
                                    <a style="border-radius: 15px 15px; " href="download.php?wsm86=<?php print_r(max($arr_wsm86)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (32 bit)</a>
                                    <a style="border-radius: 15px 15px; " href="download.php?wsm64=<?php print_r(max($arr_wsm64)); ?>" class="btn col-md-12 py-2 font-weight-bold"><i class="fa fa-download"></i>Download (64 bit)</a>
                                </p>
                            </div>
                            <small><a href="" data-toggle="modal" class="separator" data-target="#modalWsm">Other Version >></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include 'template/foot.php';
    ?>

<!-- modal -->
<?php
include "lastest_version/serverx.php";
include "lastest_version/portal.php";
include "lastest_version/studio.php";
include "lastest_version/wsm.php";
?>