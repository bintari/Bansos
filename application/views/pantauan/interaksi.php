<script>
    function DoCheckUncheckDisplay(d, dchecked, dunchecked) {
        if (d.checked == true) {
            document.getElementById(dchecked).style.display = "block";
            //   document.getElementById(dunchecked).style.display = "none";
        } else {
            document.getElementById(dchecked).style.display = "none";
            //   document.getElementById(dunchecked).style.display = "block";
        }
    }
</script>



<input type="checkbox" onclick="DoCheckUncheckDisplay(this,'checkbox-checked','checkbox-unchecked')" style="margin:0;">
Keluar rumah atau tempat isolasi mandiri

<?= form_open_multipart('user/tamu'); ?>
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

<!-- End of Main Content -->
<!-- 
<div id="checkbox-unchecked" style="display:none; color:red;">
    The checkbox is unchecked.
</div> -->