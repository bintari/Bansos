<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>

        <table class="table table-bordered dataTable no-footer" id="dataTable" width="70 %" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User Kabupaten</h6>
            </div>
            <div class="col-lg">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('message'); ?>
            </div>
            <thead>


                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Username</th>

                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"><?= $tambahan ?></th>
                </tr>

            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($da as $a) {

                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $a['name']; ?></td>
                        <td><?php echo $a['email']; ?></td>
                        <td><?php echo $a[$tambahan]; ?></td>
                    </tr>
                <?php
                    $i++;
                };
                ?>

            </tbody>

        </table>

    </div>
</div>
</div>