<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php echo form_open('warna/insert') ?>
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="hijau">hijau
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="merah"> merah
    <input type="checkbox" name="check_list[]" alt="Checkbox" value="kuning"> kuning
    <input type="submit" name="tampil" value="Simpan">
    <?= form_close()?>

<table border="1">
    <tr>
        <td>no</td>
        <td>nama warna</td>
    </tr>

    <?php $i=1; foreach($tampil_warna as $tampil){?>
        <tr>
            <td><?php echo $i; ?></td>
			<td><?php echo $tampil->option ?></td>
        </tr>
        <?php $i++;}?>
    
</table>


</body>

</html>