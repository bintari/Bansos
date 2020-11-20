<div class="container-fluid">
    <form action="<?= base_url() ?>desa" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Input Data Penerima Bantuan Sosial</h6>
            </div>

            <div class="card-body">
                <div class="col-sm-10">
                    Nama Lengkap
                    <input type="text" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control">
                </div>
                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Nomor NIK
                    <input type="text" id="nik" name="nik" value="<?php echo set_value('nik'); ?>" class="form-control">
                </div>
                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Nomor KK
                    <input type="text" id="kk" name="kk" value="<?php echo set_value('kk'); ?>" class="form-control">
                </div>
                <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Tempat Lahir
                    <input type="text" id="tempatlahir" name="tempatlahir" value="<?php echo set_value('tempatlahir'); ?>" class="form-control">
                </div>
                <?php echo form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Tanggal Lahir
                    <input type="text" id="tanggallahir" name="tanggallahir" value="<?php echo set_value('tanggallahir'); ?>" class="form-control">
                </div>
                <?php echo form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Jenis Kelamin
                    <input type="text" id="jeniskelamin" name="jeniskelamin" value="<?php echo set_value('jeniskelamin'); ?>" class="form-control">
                </div>
                <?php echo form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Agama
                    <select class="custom-select" id="agama" name="agama">
                        <option value="">No Selected</option>
                        <?php foreach ($agama as $ag) : ?>
                            <option value="<?php echo $ag['idagama'] ?>"><?php echo $ag['agama'] ?></option>
                        <?php endforeach; ?>
                    </select> </div>
                <?php echo form_error('agama', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Alamat
                    <input type="text" id="alamat" name="alamat" value="<?php echo set_value('alamat'); ?>" class="form-control">
                </div>
                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Jalan
                    <input type="text" id="jl" name="jl" value="<?php echo set_value('jl'); ?>" class="form-control">
                </div>
                <?php echo form_error('jl', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Kabupaten
                    <input type="text" id="kabupaten" name="kabupaten" value="<?php echo set_value('kabupaten'); ?>" class="form-control">
                </div>
                <?php echo form_error('kabupaten', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Kecamatan
                    <input type="text" id="kecamatan" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>" class="form-control">
                </div>
                <?php echo form_error('kecamatan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Desa
                    <input type="text" id="desa" name="desa" value="<?php echo set_value('desa'); ?>" class="form-control">
                </div>
                <?php echo form_error('desa', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    RT
                    <input type="text" id="rt" name="rt" value="<?php echo set_value('rt'); ?>" class="form-control">
                </div>
                <?php echo form_error('rt', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    RW
                    <input type="text" id="rw" name="rw" value="<?php echo set_value('rw'); ?>" class="form-control">
                </div>
                <?php echo form_error('rw', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    No. Telepon
                    <input type="text" id="telp" name="telp" value="<?php echo set_value('telp'); ?>" class="form-control">
                </div>
                <?php echo form_error('telp', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>
                <div class="col-sm-10">
                    Status Keluarga
                    <select class="custom-select" id="status" name="status">
                        <option value="">No Selected</option>
                        <?php foreach ($status as $st) : ?>
                            <option value="<?php echo $st['id'] ?>"><?php echo $st['status'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <?php echo form_error('tujuan_keluar', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                <div class="col-sm-10">
                    Data Kemiskinan<br>
                    <select class="custom-select" id="kemiskinan" name="kemiskinan">
                        <option value="">No Selected</option>
                        <?php foreach ($miskin as $mk) :
                        ?>
                            <option value="<?php echo $mk['idkemiskinan']
                                            ?>"><?php echo $mk['kemiskinan']
                                                ?></option>
                        <?php endforeach; ?>
                        <div><input type="text" id="nomiskin" name="nomiskin" placeholder="Nomor BDT/DTKS" class="form-control">
                        </div>

                    </select>

                    <div class="col-sm-10">
                        Bansos yang Diterima

                        <select class="custom-select" id="bansos" name="bansos">
                            <?php foreach ($bansos as $st) : ?>
                                <option value="<?php echo $st['idbansos'] ?>"><?php echo $st['jenis'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>
                            <input type="text" id="bansosmulai" name="bansosmulai" placeholder="Mulai Menerima Bansos" class="form-control">
                        </div>

                    </div>

                    <div class="col-sm-10">
                        Fasilitas
                        <select class="custom-select" id="fasilitas" name="fasilitas">
                            <option value="">No Selected</option>
                            <?php foreach ($fasilitas as $st) : ?>
                                <option value="<?php echo $st['idfasilitas'] ?>"><?php echo $st['fasilitas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div><input type="text" id="nofasilitas" name="nofasilitas" placeholder="Nomor BPJS" class="form-control">
                        </div>
                    </div>
                    <?php echo form_error('fasilitas', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                    <div class="col-sm-10">
                        Sumber Dana

                        <select class="custom-select" id="sumber" name="sumber">
                            <option value="">No Selected</option>
                            <?php foreach ($sumberdana as $st) : ?>
                                <option value="<?php echo $st['idsumber'] ?>"><?php echo $st['dana'] ?></option>
                            <?php endforeach; ?>
                        </select> </div>
                    <?php echo form_error('sumber', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                    <div class="col-sm-10">
                        Jenis Bantuan
                        <select class="custom-select" id="jenisbantuan" name="jenisbantuan">
                            <option value="">No Selected</option>
                            <?php foreach ($jenisbantuan as $st) : ?>
                                <option value="<?php echo $st['idjenis'] ?>"><?php echo $st['jenisbantuan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php echo form_error('jenisbantuan', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" href="<?= base_url('pantauan/tampildata') ?>">Simpan</button>
                    </div>
                </div>
    </form>
</div>
</div>
</div>