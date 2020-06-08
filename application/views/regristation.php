<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form method="post" action="<?= base_url() ?>auth/regristation" class="user">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="id" name="id" value="<?php echo set_value('id'); ?>" placeholder="Nomor NIK">
                <?php echo form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Full Name">
                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="asal_kota" name="asal_kota" value="<?php echo set_value('asal_kota'); ?>" placeholder="Asal daerah pemudik">
                <?php echo form_error('asal_kota', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>" placeholder="01 Januari 1990">
                <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo set_value('alamat'); ?>" placeholder="Alamat yang akan ditinggali">
                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="notelp" name="notelp" value="<?php echo set_value('notelp'); ?>" placeholder="08XXXXXXXXXX">
                <?php echo form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address">
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth/forgotPassword') ?>">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url() ?>auth">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>