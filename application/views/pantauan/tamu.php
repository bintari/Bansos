<script>
    function pencet(t, tchecked, tunchecked) {
        if (t.checked == true) {
            document.getElementById(tchecked).style.display = "block";
            //   document.getElementById(dunchecked).style.display = "none";
        } else {
            document.getElementById(tchecked).style.display = "none";
            //   document.getElementById(dunchecked).style.display = "block";
        }
    }
</script>


<div>
<input type="checkbox" onclick="pencet(this,'ceklis','unchecked')" style="margin:0;">
Menerima tamu selama karantina mandiri
</div>


<div id="ceklis" style="display:none;">
    <div class="row">
        <div class="col-lg-8">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
            <label for="name" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
            <label for="name" class="col-sm-2 col-form-label">tujuan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
            <label for="name" class="col-sm-2 col-form-label">waktu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
            <label for="name" class="col-sm-2 col-form-label">nomor telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
</div>


<div id="checkbox-unchecked" style="display:none; color:red;">
    The checkbox is unchecked.
</div>