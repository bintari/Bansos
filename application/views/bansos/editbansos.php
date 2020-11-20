<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url('') ?>" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Master Kemiskinan</h6>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2  col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $databansos['nama']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">No NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $databansos['nik'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">No KK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kk" name="kk" value="<?= $databansos['kk'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $databansos['tempatlahir'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $databansos['tanggallahir'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?= $databansos['jeniskelamin'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Agama</label>

                            <div class="col-sm-10">
                                <select class="custom-select" id="agama" name="agama">
                                    <option value="<?= $databansos['agama'] ?><?= $agamaval['agama'] ?></option>
                        <?php foreach ($agama as $st) : ?>
                            <option value=" <?php echo $st['idagama'] ?>"><?php echo $st['agama'] ?></option>
                                <?php endforeach; ?>
                                </select>
                                <input type="text" id="ketmiskin" name="ketmiskin" placeholder="Nomor BDT/DTKS" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Jalan / Perumahan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jl" name="jl" value="<?= $databansos['jl'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rt" name="rt" value="<?= $databansos['rt'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $databansos['rw'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Desa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="desa" name="desa" value="<?= $databansos['desa'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $databansos['kecamatan'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $databansos['kabupaten'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telp" name="telp" value="<?= $databansos['telp'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Status Keluarga</label>

                            <div class="col-sm-10">
                                <select class="custom-select" id="status" name="status">
                                    <option value="<?= $databansos['status'] ?>"><?= $statusval['status'] ?></option>
                                    <?php foreach ($status as $st) : ?>
                                        <option value="<?php echo $st['id'] ?>"><?php echo $st['status'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Data Kemiskinan</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="kemiskinan" name="kemiskinan">
                                    <option value="<?= $databansos['kemiskinan'] ?>"><?= $miskinval['kemiskinan'] ?></option>
                                    <?php foreach ($miskin as $mk) : ?>
                                        <option value="<?php echo $mk['idkemiskinan'] ?>"><?php echo $mk['kemiskinan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="text" id="nomiskin" name="nomiskin" value="<?= $databansos['nomiskin'] ?>" class=" form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Bantuan Sosial yang diterima</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="bansos" name="bansos">
                                    <option value="<?= $databansos['bansos'] ?>"><?= $bansosval['jenis'] ?></option>
                                    <?php foreach ($bansos as $st) : ?>
                                        <option value="<?php echo $st['idbansos'] ?>"><?php echo $st['jenis'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="text" id="bansosmulai" name="bansosmulai" value="<?= $databansos['bansosmulai'] ?>" class=" form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Fasilitas Kesehatan</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="fasilitas" name="fasilitas">
                                    <option value="<?= $databansos['fasilitas'] ?>"><?= $fasilitasval['fasilitas'] ?></option>
                                    <?php foreach ($fasilitas as $st) : ?>
                                        <option value="<?php echo $st['idfasilitas'] ?>"><?php echo $st['fasilitas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $databansos['nofasilitas'] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Sumber Dana</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="sumber" name="sumber">
                                    <option value="<?= $databansos['sumber'] ?>"><?= $sumberval['dana'] ?></option>
                                    <?php foreach ($sumberdana as $st) : ?>
                                        <option value="<?php echo $st['idsumber'] ?>"><?php echo $st['dana'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Jenis Bantuan</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="jenisbantuan" name="jenisbantuan">
                                    <option value="<?= $databansos['jenisbantuan'] ?>"><?= $jenisval['jenisbantuan'] ?></option>
                                    <?php foreach ($jenisbantuan as $st) : ?>
                                        <option value="<?php echo $st['idjenis'] ?>"><?php echo $st['jenisbantuan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" href="<?=base_url('desa/edit')?>" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
    </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->