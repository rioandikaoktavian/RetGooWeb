<!-- modal -->
<div class="modal fade" id="modalStudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Studio</h5>
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
                                rsort($arr_studio64);
                                foreach ($arr_studio64 as $i) {
                                    echo "<a href='download.php?studio64=$i'>" . $i . "</a><br>";
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
                                rsort($arr_studio86);
                                foreach ($arr_studio86 as $i) {
                                    echo "<a href='download.php?studio86=$i'>" . $i . "</a><br>";
                                }
                                ?>
                                </a>
                                <br>
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