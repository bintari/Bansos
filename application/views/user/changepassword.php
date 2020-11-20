<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/changepassword') ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Password terakhir</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1">Password baru</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Ulangi password baru</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ganti Password</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->