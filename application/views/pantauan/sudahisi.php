<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Terimakasih anda sudah mengisi quesioner harian hari ini</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <a href="<?= base_url('pantauan/interaksi'); ?>" class="btn btn-primary btn-icon-split">
                        <span class="text">Tambah quesioner interaksi harian</span>
                    </a>
                    <a href="<?= base_url('pantauan/tamu'); ?>" class="btn btn-primary btn-icon-split">
                        <span class="text">Tambah quesioner tamu harian</span>
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>
</div>