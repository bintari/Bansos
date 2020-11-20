<div class="container-fluid">
    <form action="<?= base_url('daftar/tambahmiskin') ?>" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Master Kemiskinan</h6>
            </div>

            <div class="card-body">
                <div class="col-sm-10">
                    no
                    <input type="text" id="idkemiskinan" name="idkemiskinan" value="<?php echo set_value('nama'); ?>" class="form-control">
                </div>
                <?php echo form_error('idkemiskinan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
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
</div>
</div>