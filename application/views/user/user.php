<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>

        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User Kabupaten</h6>
            </div>
            <div class="col-lg">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>
            </div>
            <thead>
                <div class="col-sm-3">
                    <!-- <form action="" action="GET"> -->
                    <form action="<?= base_url('daftar/hasilkab') ?>" action="GET">
                        <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </form>
                </div>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Username</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Kabupaten</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>

                </tr>

            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($results as $a) {

                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $a->name; ?></td>
                        <td><?php echo $a->email; ?></td>
                        <td><?php echo $a->kabupaten; ?></td>
                        <td><a href="<?= base_url('daftar/hapus/') . $a->email ?>" class="badge badge-warning">Hapus</a>
                    </tr>
                <?php
                    $i++;
                };
                ?>

            </tbody>

        </table>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>

            <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User Kecamatan</h6>
                </div>
                <div class="col-lg-6">
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>
                </div>
                <thead>
                    <div class="col-sm-3">
                        <!-- <form action="" action="GET"> -->
                        <form action="<?= base_url('daftar/hasilkec') ?>" action="GET">
                            <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                    </div>

                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Username</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Kecamatan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($resultkec as $a) {
                        // $iduser       = $a['iddatabansos'];
                        // $st = $this->m_laporan->tindakan($iduser)->row_array();
                    ?>
                        <tr>
                            <td><?php echo $i;
                                ?></td>
                            <td><?php echo $a->name;
                                ?></td>
                            <td><?php echo $a->email;
                                ?></td>
                            <td><?php echo $a->kecamatan;
                                ?></td>
                            <td><a href="<?= base_url('daftar/hapus/') . $a->email ?>" class="badge badge-warning">Hapus</a>

                        </tr>
                    <?php
                        $i++;
                    };
                    ?>

                </tbody>

            </table>


        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>

            <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User Desa</h6>
                </div>
                <div class="col-lg-6">
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>
                </div>
                <thead>
                    <div class="col-sm-3">
                        <!-- <form action="" action="GET"> -->
                        <form action="<?= base_url('daftar/hasildes') ?>" action="GET">
                            <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                    </div>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Username</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Desa</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($resultdes as $a) {
                        // $iduser       = $a['iddatabansos'];
                        // $st = $this->m_laporan->tindakan($iduser)->row_array();
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $a->name; ?></td>
                            <td><?php echo $a->email; ?></td>
                            <td><?php echo $a->desa; ?></td>
                            <td><a href="<?= base_url('daftar/hapus/') . $a->email ?>" class="badge badge-warning">Hapus</a>

                        </tr>
                    <?php
                        $i++;
                    };
                    ?>

                </tbody>

            </table>


        </div>

    </div>





</div>

</div>


</div>
</div>