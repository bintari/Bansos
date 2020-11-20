<!-- Begin Page Content -->
<div class="container-fluid">
    <form action="<?= base_url() ?>pantauan/kesehatan" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Diagnosa</h6>
            </div>
            <div class="card-body">
                Saat ini merasakan demam diatas 37 derajat
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal1" id="jawaban11" value="1">
                    <label class="form-check-label" for="jawanan11">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal1" id="jawaban12" value="0">
                    <label class="form-check-label" for="jawaban12">
                        Tidak
                    </label>
                </div>
                <?php echo form_error('soal1', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                Saat ini merasakan batuk pilek
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal2" id="jawaban21" value="1">
                    <label class="form-check-label" for="jawaban21">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal2" id="jawaban22" value="0">
                    <label class="form-check-label" for="jawaban22">
                        Tidak
                    </label>
                </div>
                <?php echo form_error('soal2', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                Saat ini merasa kesulitan bernafas atau sesak nafas
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal3" id="jawaban31" value="1">
                    <label class="form-check-label" for="jawaban31">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal3" id="jawaban32" value="0">
                    <label class="form-check-label" for="jawaban32">
                        Tidak
                    </label>
                </div>
                <?php echo form_error('soal3', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                Memiliki riwayat kontak dengan penderita terkonfirmasi COVID-19
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal4" id="jawaban41" value="1">
                    <label class="form-check-label" for="jawaban41">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal4" id="jawaban42" value="0">
                    <label class="form-check-label" for="jawaban42">
                        Tidak
                    </label>`
                </div>
                <?php echo form_error('soal4', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>

                Menunggu hasil pemeriksaan swab test
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal5" id="jawaban51" value="1">
                    <label class="form-check-label" for="jawaban51">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="soal5" id="jawaban52" value="0">
                    <label class="form-check-label" for="jawaban52">
                        Tidak
                    </label>
                </div>
                <?php echo form_error('soal7', '<small class="text-danger pl-3">', '</small>', '<br>'); ?>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->