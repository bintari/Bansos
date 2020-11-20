<div class="container-fluid">
    <form action="<?= base_url('daftar/editmiskin') ?>" method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data Bantuan Sosial Desa</h6>
            </div>

            <?php
            foreach ($miskin as $miskin) {
                // $iduser       = $a['iddatabansos'];
                // $st = $this->m_laporan->tindakan($iduser)->row_array();
            ?>
                <tr>
                    <td><?php echo $miskin['idkemiskinan']; ?></td>
                    <td><?php echo $miskin['kemiskinan']; ?></td>



                <?php
            };
                ?>
    </form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->