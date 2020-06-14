<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <thead>
                        <tr>
                            <td>nama</td>
                        </tr>
                        <?php foreach ($tamu as $a) :
                            $nama = $a['tamu_nama']; ?>
                            <tr>
                                <td> <?= $nama; ?></td>
                            </tr>

                        <?php endforeach ?>
                    </thead>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->