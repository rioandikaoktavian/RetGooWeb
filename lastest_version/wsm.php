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
                                    <?php
                                        rsort($arr_wsm64);
                                        foreach ($arr_wsm64 as $i) {
                                            echo "<a href='download.php?wsm64=$i'>" . $i . "</a><br>";
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
                                    <?php
                                        rsort($arr_wsm86);
                                        foreach ($arr_wsm86 as $i) {
                                            echo "<a href='download.php?wsm86=$i'>" . $i . "</a><br>";
                                        }
                                        ?>
                                    </a>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            <?php } else {
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
                                    <a href=""><?php print_r(max($arr_wsm64)); ?></a>
                                    <br>
                                    <a href=""><?php print_r(max($arr_wsm64)); ?></a>
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
                                    <a href=""><?php print_r(max($arr_wsm86)); ?></a>
                                    <br>
                                    <a href=""><?php print_r(max($arr_wsm86)); ?></a>
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