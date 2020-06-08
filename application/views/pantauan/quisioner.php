<!-- Begin Page Content -->
<div class="container-fluid">
    <script>

    </script>
    <script>
        function pencet(t, tchecked, tunchecked) {
            if (t.checked == true) {
                document.getElementById(tchecked).style.display = "block";
                //   document.getElementById(dunchecked).style.display = "none";
            } else {
                document.getElementById(tchecked).style.display = "none";
                document.getElementById(dunchecked).style.display = "block";
            }
        }
    </script>
    <script>
        function swab(t, tchecked, tunchecked) {
            if (t.checked == true) {
                document.getElementById(tchecked).style.display = "block";
                //   document.getElementById(dunchecked).style.display = "none";
            } else {
                document.getElementById(un).style.display = "none";
                //   document.getElementById(dunchecked).style.display = "block";
            }
        }
    </script>
    <script>
        function DoCheckUncheckDisplay(d, dchecked, dunchecked) {
            if (d.checked == true) {
                document.getElementById(dchecked).style.display = "block";
                // document.getElementById(dunchecked).style.display = "none";
            } else {
                document.getElementById(dchecked).style.display = "none";
                document.getElementById(dunchecked).style.display = "block";
            }
        }
    </script>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1> -->
    Silahkan tandai dengan sesuai

    <div class="row">
        <div class="col-lg-8">

            <div class="form-group row">
                <div class="col-sm-10">
                    <?= form_open('user/checbox') ?>
                    <input type="checkbox" id="q1" name="check_list[]">Saat ini merasakan demam<br>
                    <input type="checkbox" id="q2" name="check_list[]">Saat ini merasakan batuk / pilek<br>
                    <input type="checkbox" id="q3" name="check_list[]">Saat ini merasa kesulitan bernafas atau sesak nafas<br>
                    <input type="checkbox" id="q4" name="check_list[]">Saat ini merasa mengalami nyeri tenggorokan<br>
                    <input type="checkbox" id="q5" name="check_list[]">Lama penyakit kurang dari 14 hari<br>
                    <input type="checkbox" id="q6" name="check_list[]">Memiliki riwayat kontak dengan penderita terkonfirmasi COVID-19<br>
                    <input type="checkbox" id="q6" name="q6">Melakukan pemeriksaan swab test<br>

                    <input type="checkbox" onclick="swab(this,'swab','checkbox-unchecked')">Menerima hasil pemeriksaan swab test
                    <div id="swab" style="display:none;">
                        <div class="row">
                            <div class="col-lg-8">
                                <input type="radio" name="" id="">Positif
                                <input type="radio" name="" id="">Negatif
                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                    <br><input type="checkbox" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')">Keluar rumah atau tempat isolasi mandiri
                    <?= form_open('user/pantauan'); ?>
                    <div id="checkbox" style="display:none;">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama_keluar" name="nama_keluar" name="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" id="alamat_keluar" name="alamat_keluar" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">tujuan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tujuan_keluar" name="tujuan_keluar" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">waktu</label>
                                <div class="col-sm-10">
                                    <input type="text" id="waktu_keluar" name="waktu_keluar" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= form_close() ?>
                    <br> <input type="checkbox" onclick="pencet(this,'ceklis','unchecked')">Menerima tamu selama karantina mandiri
                    <?= form_open_multipart('user/pantauan'); ?>
                    <div id="ceklis" style="display:none;">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tamu_nama" name="tamu_nama" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tamu_alamat" name="tamu_alamat" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">tujuan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tamu_tujuan" name="tamu_tujuan" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">waktu</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tamu_waktu" name="tamu_waktu" class="form-control">
                                </div>
                                <label for="name" class="col-sm-2 col-form-label">nomor telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tamu_nomorhp" name="tamu_nomorhp" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div>
                    <button type="submit" name="submit" id="submit-interaksi" class="btn btn-primary">Simpan</button>
                </div>
            </div>

        </div>

        <div>
            <h3>Peduli Kesehatan Pemudik</h3>
            <p>Peduli kesehatan pemudik adalah quesioner harian mengenai kesehatan pemudik tiap harinya guna mencehah penyebaran virus Covid-19. Yuk kita jaga kesehatan serta waspada penyebarannya</p>
            <button type="submit" name="submit" id="submit-interaksi" class="btn btn-primary">Mulai quesioner</button>
        </div>
        <div>
            <h3>Peduli Interaksi Sesama</h3>
            <p>Peduli Interaksi Sesama adalah data yang harus diisi tiap kali berpergian keluar rumah. Bukan hanya pemudik saja yang berpotensi Covid-19 tapi lingkungan sekitar juga loh, yuk isi quesioner tiap kali keluar rumah selama masa karantina mandiri</p>
            <button type="submit" name="submit" id="submit-interaksi" class="btn btn-primary">Simpan</button>
        </div>
        <a href='https://www.freepik.com/free-photos-vectors/food'>Food vector created by freepik - www.freepik.com</a>
    </div>


</div>


</div>