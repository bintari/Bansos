<div class="container-fluid">
  <form action="<?= base_url('daftar/datamaster') ?>" method="POST">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Data Bantuan Sosial Desa</h6>
      </div>



      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-3">
                <a href='<?= base_url('kecamatan/export') ?>'>export seluruh data</a>
              </div>

              <!-- <form action="<?php echo base_url('laporan/hasil') ?>" action="GET">
                                <div class="form-group">
                                    <label for="cari">data yang dicari</label>
                                    <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                                </div>
                                <input class="btn btn-primary" type="submit" value="Cari">
                            </form>
                            <button href="<?= base_url('kecamatan/export/') ?>" class="badge badge-warning">Edit</button> -->

              <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">NIK</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">KK</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Desa</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Kecamatan</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Kabupaten</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Validasi Data</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Aksi</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  $i=1;
                  foreach ($results as $a) {
                    // $iduser       = $a['iddatabansos'];
                    // $st = $this->m_laporan->tindakan($iduser)->row_array();
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php echo $a->nik; ?></td>
                      <td><?php echo $a->kk; ?></td>
                      <td><?= ($a->verif_desa == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>

                      <td><?= ($a->verif_kecamatan == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>
                      <td><?= ($a->verif_kabupaten == 1) ? "Tervalidasi" : "Belum Tervalidasi"; ?></td>
                      <td><a href="<?= base_url($validasi) . $a->iddatabansos ?>" class="badge badge-warning">Validiasi</a></td>
                      <td> <a href="<?= base_url('desa/detail/') . $a->iddatabansos ?>" class="badge badge-warning">Detail</a>
                        <a href="<?= base_url('kecamatan/edit/') . $a->iddatabansos ?>" class="badge badge-warning">Edit</a>
                        <a href="<?= base_url($hapus) . $a->iddatabansos ?>" class="badge warning">Hapus</a></td>
                    </tr>
                    </tr>
                  <?php
                  $i++;
                  };
                  ?>

                </tbody>

              </table>
              <?php
              if (isset($links)) {
                echo $links;
              }
              ?>
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