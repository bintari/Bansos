<div class="container-fluid">
    <form action="<?= base_url() ?>pantauan/tamu" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kunjungan Tamu</h6>
            </div>

            <div class="card-body">
                <div class="col-sm-10">
                    Nama Tamu
                    <input type="text" id="tamu_nama" name="tamu_nama" class="form-control">
                </div>
                <?php echo form_error('tamu_nama', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Alamat Tamu
                    <input type="text" id="tamu_alamat" name="tamu_alamat" class="form-control">
                </div>
                <?php echo form_error('tamu_alamat', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Nomor Telepon
                    <input type="text" id="tamu_nomorhp" name="tamu_nomorhp" class="form-control">
                </div>
                <?php echo form_error('tamu_nomorhp', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Waktu Kunjungan<br>
                    <input type="time" id="tamu_waktu" name="tamu_waktu">
                    <?php echo form_error('<br>', 'tamu_waktu', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>
                </div>
                <div class="col-sm-10">
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-warning btn-xs" href="<?= base_url() ?>pantuan/tamu" title="tambah"><span class="fas fa-edit fa-xs"></span></a>
                </div>
            </div>
    </form>
</div>
</div>
</div>
