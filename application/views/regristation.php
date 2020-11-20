<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
            </div>
            <form method="post" action="<?= base_url() ?>auth/regristation" class="user">
              <div class="form-group">
              <label class="col-sm-2 col-form-label">Nama</label>
                <input type="text" class="form-control form-control-user" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Nama Lengkap">
                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">

              <label class="col-sm-2 col-form-label">Email</label>
                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Alamat Email">
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
              <label class="col-sm-2 col-form-label">Password</label>
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                  <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Daftar
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth/forgotPassword') ?>">Lupa Password</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url() ?>auth">Telah Memiliki Akun</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>