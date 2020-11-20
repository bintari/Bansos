<div class="container-fluid">
    <form action="<?= base_url('daftar/datamaster') ?>" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Daftar Kecamatan</h6>
            </div>


            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">

                            <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Desa</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kec as $a) {
                                        // $iduser       = $a['iddatabansos'];
                                        // $st = $this->m_laporan->tindakan($iduser)->row_array();
                                    ?>
                                        <tr>
                                            <td><?php echo $a->kecamatan; ?></td>
                                            <td><a href="<?= base_url('kabupaten/deslist/') . $a->kecamatan ?>" class="badge badge-warning">Lihat Selengkapnya</a></td>

                                        </tr>
                                        </tr>
                                    <?php
                                    };
                                    ?>

                                </tbody>

                            </table>
                            <?php
                            if (isset($links)) {
                                echo $links;
                            }
                            ?>
                        </div>
                    </div>
                    <!-- <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
</div>

</div>