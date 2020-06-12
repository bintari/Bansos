<div class="container-fluid">
    <form action="<?= base_url() ?>pantauan/interaksi" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Interaksi Keluar</h6>
            </div>

            <div class="card-body">
                <div class="col-sm-10">
                    Nama Tempat yang Dikunjungi
                    <input type="text" id="nama_keluar" name="nama_keluar" class="form-control">
                </div>
                <?php echo form_error('nama_keluar', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Alamat Tempat
                    <input type="text" id="alamat_keluar" name="alamat_keluar" class="form-control">
                </div>
                <?php echo form_error('alamat_keluar', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Tujuan Keluar
                    <input type="text" id="tujuan_keluar" name="tujuan_keluar" class="form-control">
                </div>
                <?php echo form_error('tujuan_keluar', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Waktu keluar<br>
                    <input type="time" id="waktu_keluar" name="waktu_keluar">
                    <input type="time" id="waktu_pulang" name="waktu_pulang">
                    <?php echo form_error('waktu_keluar', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>
                </div>
                <div class="col-sm-10">
                    <br><button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </div>
    </form>
</div>
</div>
</div>

<!-- End of Main Content -->
<!-- 
<div id="checkbox-unchecked" style="display:none; color:red;">
    The checkbox is unchecked.
</div> -->