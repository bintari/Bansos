<!-- Begin Page Content -->
<div class="container-fluid">

  <form action="<?= base_url('') ?>" method="POST">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data</h6>

        <div class="row">
          <div class="col-lg-10">
            <div class="form-group row">
              <label for="email" class="col-sm-2  col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $databansos['nama']; ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">No NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" name="nik" value="<?= $databansos['nik'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">No KK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kk" name="kk" value="<?= $databansos['kk'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $databansos['tempatlahir'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $databansos['tanggallahir'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?= $databansos['jeniskelamin'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Agama</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp" value="<?= $agamaval['agama'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Jalan / Perumahan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="jl" name="jl" value="<?= $databansos['jl'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">RT</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="rt" name="rt" value="<?= $databansos['rt'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">RW</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="rw" name="rw" value="<?= $databansos['rw'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Desa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="desa" name="desa" value="<?= $databansos['desa'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Kecamatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $databansos['kecamatan'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Kabupaten</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $databansos['kabupaten'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">No Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp" value="<?= $databansos['telp'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Status Keluarga</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp" value="<?= $statusval['status'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Data Kemiskinan</label>
              <div class="col-sm-10">

                <input type="text" class="form-control" id="telp" name="telp" value="<?= $miskinval['kemiskinan'] ?>" readonly> <br>
                <input type="text" id="nomiskin" name="nomiskin" value="<?= $databansos['nomiskin'] ?>" class=" form-control" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Bantuan Sosial yang diterima</label>
              <div class="col-sm-10">

                <input type="text" class="form-control" id="telp" name="telp" value="<?= $bansosval['jenis'] ?>" readonly><br>
                <input type="text" id="bansosmulai" name="bansosmulai" value="<?= $databansos['bansosmulai'] ?>" class=" form-control" readonly>
              </div>
            </div>


            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Fasilitas Kesehatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp" value="<?= $fasilitasval['fasilitas'] ?>" readonly><br>

                <input type="text" class="form-control" id="name" name="name" value="<?= $databansos['nofasilitas'] ?>" readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Sumber Dana</label>
              <div class="col-sm-10">

                <input type="text" class="form-control" id="telp" name="telp" value="<?= $sumberval['dana'] ?>" readonly>

              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Jenis Bantuan</label>
              <div class="col-sm-10">

                <input type="text" class="form-control" id="telp" name="telp" value="<?= $jenisval['jenisbantuan'] ?>" readonly>


              </div>
            </div>


  </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->