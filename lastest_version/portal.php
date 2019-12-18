<!-- modal -->
<div class="modal fade" id="modalPortal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Portal</h5>
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
                                <!-- tampilkan file x64 -->
                                <?php
                                rsort($arr_portal64);
                                foreach ($arr_portal64 as $i) {
                                    echo "<a href='download.php?portal64=$i'>" . $i . "</a><br>";
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
                                <!-- tampilkan file x86 -->
                                <?php
                                rsort($arr_portal86);
                                foreach ($arr_portal86 as $i) {
                                    echo "<a href='download.php?portal86=$i'>" . $i . "</a><br>";
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