<div class="container-fluid">
    <form action="<?= base_url('daftar/datamaster') ?>" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data Bantuan Sosial Desa</h6>
            </div>


            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                            <a href="<?= base_url('desa/export') ?>">Export data</a>
                            </div>
                            <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                                <!-- <a href="<?= base_url('desa/tervalidasi') ?>">Tervalidasi
                                    <?= $this->M_Bansos->get_total_desa() ?></a>
                                <a href="<?= base_url('desa/belumtervalidasi') ?>">Belum tervalidasi
                                    <?= $this->M_Bansos->get_total_desa_belum() ?></a> -->

                                <!-- <a href="">Data Belum Tervalidasi sebanyak </a> -->
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">NIK</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">KK</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Desa</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Kecamatan</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Kabupaten</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Data</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($results as $a) {
                                        // $iduser       = $a['iddatabansos'];
                                        // $st = $this->m_laporan->tindakan($iduser)->row_array();
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $a->nama; ?></td>
                                            <td><?php echo $a->nik; ?></td>
                                            <td><?php echo $a->kk; ?></td>
                                            <td><?= ($a->verif_desa == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>

                                            <td><?= ($a->verif_kecamatan == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>
                                            <td><?= ($a->verif_kabupaten == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>
                                            <td><a href="<?= base_url('desa/validasi/') . $a->iddatabansos ?>" class="badge badge-warning" data-toggle="modal" data-target="#validasiModal">Validasi</a></td>
                                            <td><a href="<?= base_url('desa/detail/') . $a->iddatabansos ?>" class="badge badge-warning">Detail</a><br>
                                                <a href="<?= base_url('desa/edit/') . $a->iddatabansos ?>" class="badge badge-warning">Edit</a>
                                                <a href="<?= base_url('desa/hapus/') . $a->iddatabansos ?>" class="badge warning">Hapus</a>
                                        </tr>
                                        </tr>
                                    <?php
                                        $i++;
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
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="validasiModal>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel">Validasi Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>