<!-- modal -->
<div class="modal fade" id="modalServerx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ServerX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                                rsort($arr_serverx64);
                                foreach ($arr_serverx64 as $i) {
                                    echo "<a href=download.php?server64=$i>" . $i . "</a><br>";
                                } ?>
                                </a>
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
                                rsort($arr_serverx86);
                                foreach ($arr_serverx86 as $i) {
                                    echo "<a href='download.php?server86=$i'>" . $i . "</a><br>";
                                } ?>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>