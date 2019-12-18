<!-- modal -->
<div class="modal fade" id="modalWsm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">WSM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            // kondisi untuk cek OS apa yang sedang mengakses proses ini
            if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
                ?>
                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">x64 bit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <!-- tampilkan file x64 bit -->
                                    <?php
                                        rsort($arr_wsm_windows64);
                                        foreach ($arr_wsm_windows64 as $i) {
                                            echo "<a href='download.php?wsm_windows64=$i'>" . $i . "</a><br>";
                                        }
                                        ?>
                                    </a>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th scope="col">x86 bit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <!-- tampilkan file x86 bit -->
                                    <?php
                                        rsort($arr_wsm_windows86);
                                        foreach ($arr_wsm_windows86 as $i) {
                                            echo "<a href='download.php?wsm_windows86=$i'>" . $i . "</a><br>";
                                        }
                                        ?>
                                    </a>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
                // kondisi jika bukan OS Windows yang mengakses proses
            } else {
                ?>
                <div class="modal-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">x64 bit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                        rsort($arr_wsm_linux64);
                                        foreach ($arr_wsm_linux64 as $i) {
                                            echo "<a href='download.php?wsm_linux64=$i'>" . $i . "</a><br>";
                                        }
                                        ?>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th scope="col">x86 bit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                        rsort($arr_wsm_linux86);
                                        foreach ($arr_wsm_linux86 as $i) {
                                            echo "<a href='download.php?wsm_linux86=$i'>" . $i . "</a><br>";
                                        }
                                        ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            } ?>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php
?>