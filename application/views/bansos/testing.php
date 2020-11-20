<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1> -->
<!-- 
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="<?php echo base_url('laporan/hasil') ?>" action="GET">
                            <div class="form-group">
                                <label for="cari">data yang dicari</label>
                                <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Cari">
                        </form>
                        <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">nik</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">desa</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">kecamatan</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Status Validasi</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                foreach ($kab as $a) {
                                    // $iduser       = $a['iddatabansos'];
                                    // $st = $this->m_laporan->tindakan($iduser)->row_array();
                                ?>
                                    <tr>
                                        <td><?php echo $a->kecamatan; ?></td>
                                        <!-- <td><?php echo $a->nama; ?></td>
                                        <td><?php echo $a->nik; ?></td>
                                        <td><?php echo $a->kk; ?></td>
                                        <td><?php echo $a->tempatlahir; ?></td> -->
                                        <td> <a href="<?= base_url('desa/testingkec/') . $a->kecamatan?>" class="badge warning">testing</a>
                                            <!-- <a href="<?= base_url('desa/validasi/') . $a->iddatabansos ?>" class="badge badge-warning">Tervalidasi Desa</a></td>
                                        <td><a href="<?= base_url('desa/detail/') . $a->iddatabansos ?>" class="badge badge-warning">Detail</a>
                                            <a href="<?= base_url('desa/edit/') . $a->iddatabansos ?>" class="badge badge-warning">Edit</a>
                                            <a href="<?= base_url('desa/hapus/') . $a->iddatabansos ?>" class="badge warning">Hapus</a></td> -->
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
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->

    </div>