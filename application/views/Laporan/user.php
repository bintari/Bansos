<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="card mb-3" style="max-width: 540px;">
        <div class="col-md-8">
            <table class="table table-bordered table-condensed" style="font-size:11px;" width="100%">
                <thead>
                    <tr>
                        <td>nama</td>
                        <td>email</td>
                        <td>tanggal lahir</td>
                        <td>no telepon</td>
                        <td>asal kota</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($user->result_array() as $a) :
                        $name = $a['name'];
                        $email = $a['email'];
                        $tgl_lahir = $a['tgl_lahir'];
                        $notelp = $a['notelp'];
                        $asal_kota = $a['asal_kota'];
                    ?>
                        <tr>

                            <td> <?= $name; ?></td>
                            <td> <?= $email; ?></td>
                            <td> <?= $tgl_lahir; ?></td>
                            <td> <?= $notelp; ?></td>
                            <td> <?= $asal_kota; ?></td>
                            <td><a class="btn btn-warning btn-xs" href="<?= base_url() ?>laporan/<?= $a['id']; ?>" title="trecking"><span class="fas fa-edit fa-xs"></span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->