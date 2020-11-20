<div class="container-fluid">
    <form action="" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
            </div>

            <div class="card-body">
                <div class="col-sm-10">
                    Nama
                    <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
                </div>
                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Username
                    <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                </div>
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Tingkatan
                    <select class="custom-select" id="role_id" name="role_id">
                        <option value="">No Selected</option>
                        <?php foreach ($tingkat as $a) : ?>
                            <option value="<?php echo $a['idtingkat'] ?>"><?php echo $a['namatingkat'] ?></option>
                        <?php endforeach; ?>
                    </select> </div>


                <div class="col-sm-10">
                    Desa
                    <input type="text" id="desa" name="desa" value="<?php echo set_value('desa'); ?>" class="form-control">
                </div>
                <?php echo form_error('desa', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Kecamatan
                    <input type="text" id="kecamatan" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>" class="form-control">
                </div>
                <?php echo form_error('kecamatan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Kabupaten
                    <input type="text" id="kabupaten" name="kabupaten" value="<?php echo set_value('kabupaten'); ?>" class="form-control">
                </div>
                <?php echo form_error('kabupaten', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Password
                    <input type="text" id="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control">
                </div>
                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>


                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" href="<?= base_url('daftar/regis') ?>">Simpan</button>
                </div>
            </div>
    </form>
</div>
</div>
</div>
</div>
</div>