<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data Master</h6>
        </div>
        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Master Kemiskinan</h6>
            </div>
            <div class="col-lg-6">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url('daftar/tambahmiskin') ?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#logoutModal">Tambah Data Master</a>
            </div>
            <thead>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Id</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Data Kemsikinan</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($miskin as $miskin) {
                ?>
                    <tr>
                        <td><?php echo $miskin['idkemiskinan']; ?></td>
                        <td><?php echo $miskin['kemiskinan']; ?></td>
                        <?= $miskin['idkemiskinan'] ?>
                        

                        <td><a href="<?= base_url('daftar/editmiskin/') . $miskin['idkemiskinan'] ?>" class="badge badge-warning" data-toggle="modal" data-target="#editmiskin<?= $miskin['idkemiskinan'] ?>">Edit</a>
                            <a href="<?= base_url('desa/validasi/') .  $miskin['idkemiskinan']  ?>" class="badge badge-warning" data-toggle="modal" data-target="#tambahModal">Hapus</a>

                    </tr>

                <?php
                };
                ?>

            </tbody>

        </table>


        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Master Bansos Yang Diterima</h6>
            </div>
            <div class="col-lg-6">
                <a href="<?= base_url('daftar/tambahbansos') ?>" class="btn btn-primary" data-toggle="modal" data-target="#tambahbansos">Tambah Data Master</a>


            </div>
            <thead>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Bansos</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($bansos as $a) {
                    // $iduser       = $a['iddatabansos'];
                    // $st = $this->m_laporan->tindakan($iduser)->row_array();
                ?>

                    <tr>
                        <td><?php echo $a['idbansos']; ?></td>
                        <td><?php echo  $a['jenis']; ?></td>

                        <td><a href="<?= base_url('desa/detail/') . $miskin['idkemiskinan'] ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('desa/validasi/') .  $miskin['idkemiskinan'];?>" class="badge badge-warning" data-toggle="modal" data-target="#validasiModal">Hapus</a>

                    </tr>
                <?php
                };
                ?>

            </tbody>

        </table>
        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Fasilitas Kesehatan</h6>
            </div>
            <div class="col-lg-6">
                <a href="<?= base_url('daftar/tambahfasilitas') ?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahfasiliatas">Tambah Data Master</a>
            </div>

            <thead>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Fasilitas Kesehatan</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($fasilitas as $a) {
                    // $iduser       = $a['iddatabansos'];
                    // $st = $this->m_laporan->tindakan($iduser)->row_array();
                ?>
                    <tr>
                        <td><?php echo $a['idfasilitas']; ?></td>
                        <td><?php echo $a['fasilitas']; ?></td>

                        <td><a href="<?= base_url('desa/detail/') . $a['idfasilitas'] ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('desa/validasi/') . $a['idfasilitas'] ?>" class="badge badge-warning" data-toggle="modal" data-target="#validasiModal">Hapus</a>
                        </td>
                    </tr>
                    </tr>
                <?php
                };
                ?>

            </tbody>

        </table>
        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Master Sumber Dana</h6>
            </div>
            <thead>

                <div class="col-lg-6">
                    <a href="<?= base_url('daftar/tambahsumber') ?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahsumber">Tambah Data Master</a>
                </div>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Sumber Dana</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($sumberdana as $a) {
                ?>
                    <tr>
                        <td><?php echo $a['idsumber']; ?></td>
                        <td><?php echo $a['dana']; ?></td>

                        <td><a href="<?= base_url('desa/detail/') .  $a['idsumber'] ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('desa/validasi/') .  $a['idsumber'] ?>" class="badge badge-warning" data-toggle="modal" data-target="#validasiModal">Hapus</a>
                        </td>
                    </tr>

                <?php
                };
                ?>

            </tbody>

        </table>
        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Master Jenis Bantuan</h6>
            </div>
            <div class="col-lg-6">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>

                <a href="<?= base_url('daftar/tambahjenis') ?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahjenis">Tambah Data Master</a>
            </div>

            <thead>

                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Jenis Bantuan</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                </tr>

            </thead>
            <tbody>
                <?php
                foreach ($jenisbantuan as $a) {

                ?>
                    <tr>
                        <td><?php echo $a['idjenis']; ?></td>
                        <td><?php echo $a['jenisbantuan']; ?></td>
                        <td><a href="<?= base_url('desa/detail/') .  $a['idjenis']; ?>" class="badge badge-warning">Edit</a>
                            <a href="<?= base_url('desa/validasi/') . $a['idjenis']; ?>" class="badge badge-warning" data-toggle="modal" data-target="#validasiModal">Hapus</a>
                        </td>


                    </tr>
                <?php
                };
                ?>

            </tbody>

        </table>

        <!-- MODALS TAMBAH -->

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Kemiskinan</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('daftar/tambahmiskin') ?>" method="POST">

                        <div class="card-body">
                            <div class="col-sm">
                                no
                                <input type="text" id="idkemiskinan" name="idkemiskinan" value="<?php echo set_value('nama'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('idkemiskinan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm">
                                Nama Data Kemsikinan
                                <input type="text" id="kemiskinan" name="kemiskinan" value="<?php echo set_value('kemiskinan'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('kemiskinan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahfasiliatas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Fasilitas</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('daftar/tambahfasilitas') ?>" method="POST">

                        <div class="card-body">
                            <div class="col-sm">
                                No
                                <input type="text" id="idfasilitas" name="idfasilitas" value="<?php echo set_value('idfasilitas'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('idfasilitas', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm">
                                Nama Data Fasilitas
                                <input type="text" id="fasilitas" name="fasilitas" value="<?php echo set_value('fasilitas'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('fasilitas', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahsumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Dana Bantuan Sosial</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('daftar/tambahjenis') ?>" method="POST">

                        <div class="card-body">
                            <div class="col-sm">
                                No
                                <input type="text" id="idjenis" name="idjenis" value="<?php echo set_value('idjenis'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('idjenis', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm">
                                Nama Data Dana Bantuan Sosial
                                <input type="text" id="jenisbantuan" name="jenisbantuan" value="<?php echo set_value('jenisbantuan'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('jenisbantuan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Dana Bantuan Sosial</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('daftar/tambahjenis') ?>" method="POST">

                        <div class="card-body">
                            <div class="col-sm">
                                No
                                <input type="text" id="idjenis" name="idjenis" value="<?php echo set_value('idjenis'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('idjenis', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm">
                                Nama Data Dana Bantuan Sosial
                                <input type="text" id="jenisbantuan" name="jenisbantuan" value="<?php echo set_value('jenisbantuan'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('jenisbantuan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahbansos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Dana Bantuan Sosial</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('daftar/tambahbansos') ?>" method="POST">

                        <div class="card-body">
                            <div class="col-sm">
                                No
                                <input type="text" id="idbansos" name="idbansos" value="<?php echo set_value('idbansos'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('idbansos', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm">
                                Nama Data Dana Bantuan Sosial
                                <input type="text" id="jenis" name="jenis" value="<?php echo set_value('jenis'); ?>" class="form-control">
                            </div>
                            <?php echo form_error('jenis', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <?php
        foreach ($miskin as $miskin) {
        ?>
            <div class="modal fade" id="editmiskin<?= $miskin['idkemiskinan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master Dana Bantuan Sosial</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                <?= $miskin['idkemiskinan']; ?>
                            </button>
                        </div>



                    </div>
                </div>
            </div>
<?php
        };
?>
    </div>

 
 
    
       