<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox warna</title>
</head>

<body>
    <a href="localhost/referensi/sistempakar">cek</a>
    <?= form_open_multipart('pantaun/insert') ?> <input type="checkbox" name="check_list[]" alt="Checkbox" value="merah"> merah
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="kuning"> kuning
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="hijau"> hijau
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="biru"> biru
    <input type="submit" name="tampil" value="Simpan">

    <!-- <table border="1">
        <tr>

            <td>Nama Warna</td>
        </tr>

        <tr>
            <td><?php base_url('pantaun') ?></td>
        </tr> -->

</body>

</html>