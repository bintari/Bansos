<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?php echo $tittle ?></h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Laporan Diagnosa Harian </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Tanggal Diagnosa</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Hasil Diagnosa</th>
                  </tr>

                </thead>
                <tbody>

                  <?php foreach ($userD as $a) : ?>
                    <tr>
                      <td> <?= $a['d_createdD']; ?></td>
                      <td> <?= $a['hasil']; ?></td>

                    </tr>

                  <?php endforeach; ?>


                </tbody>

              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Laporan Tempat Kunjungan </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Tanggal Berkunjung</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Tempat</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Alamat Tempat</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Tujuan</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Waktu Kunjungan</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Keterangan</th>
                  </tr>

                </thead>
                <tbody>

                  <?php foreach ($userK as $a) : ?>
                    <tr>
                      <td> <?= $a['d_createdK']; ?></td>
                      <td> <?= $a['nama_keluar']; ?></td>
                      <td> <?= $a['alamat_keluar']; ?></td>
                      <td> <?= $a['tujuan_keluar']; ?></td>
                      <td> <?= $a['waktu_keluar']; ?></td>

                    </tr>

                  <?php endforeach; ?>


                </tbody>

              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Laporan Kunjungan Tamu </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Tanggal Berkunjung</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama Tamu</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Alamat Tempat</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nomor Telepon</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Waktu Kunjungan</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Keterangan</th>
                  </tr>

                </thead>
                <tbody>

                  <?php foreach ($userT as $a) : ?>
                    <tr>
                      <td> <?= $a['d_createdT']; ?></td>
                      <td> <?= $a['tamu_nama']; ?></td>
                      <td> <?= $a['tamu_alamat']; ?></td>
                      <td> <?= $a['tamu_nomorhp']; ?></td>
                      <td> <?= $a['tamu_waktu']; ?></td>

                    </tr>

                  <?php endforeach; ?>


                </tbody>

              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
</div>