<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Tables</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                  <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Kode</th>
                                          <th>Jenis Barang</th>
                                          <th>Stok</th>
                                          <th>Detail Stok</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($stok as $s) : ?>
                                    <tr>
                                          <th scope="row"><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $s['nama']; ?></strong>
                                          </td>
                                          <td><?= $s['kode']; ?></td>
                                          <td><?= $s['jenis']; ?></td>
                                          <td><?= $s['stok']; ?></td>

                                    </tr>
                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>