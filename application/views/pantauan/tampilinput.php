<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Hari Ini</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <a href="<?= base_url('pantauan/interaksi'); ?>" class="btn btn-primary btn-icon-split">
                        <span class="text">Tambah Data</span>
                    </a>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">alamat</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">tujuan</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">waktu keluar</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">waktu pulang</th>
                                    </tr>
                                    <?php foreach ($keluar as $a) :
                                        $nama = $a['nama_keluar'];
                                        $alamat = $a['alamat_keluar'];
                                        $tujuan = $a['tujuan_keluar'];
                                        $waktu = $a['waktu_keluar']; ?>
                                        <tr>
                                            <th> <?= $nama; ?></td>
                                            <th> <?= $alamat; ?></td>
                                            <th> <?= $tujuan; ?></td>
                                            <th> <?= $waktu; ?></td>
                                            <th> <?= $a['waktu_pulang'];?></th>
                                        </tr>
                                    <?php endforeach ?>
                                </thead>
                                <tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>