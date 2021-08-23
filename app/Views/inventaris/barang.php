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
                                          <th>id</th>
                                          <th>Nomor</th>
                                          <th>Kode Barang</th>
                                          <th>Kode Transaksi</th>
                                          <th>Penerima</th>
                                          <th>Nama Barang</th>
                                          <th>Jenis Barang</th>
                                          <th>Quantity</th>
                                          <th>Harga</th>
                                          <th>Gambar</th>
                                          <th>Keterangan</th>
                                          <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($barang as $b) : ?>
                                    <tr>
                                          <th scope='row'><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $b['nomor']; ?></strong>
                                          </td>
                                          <td><?= $b['kode']; ?></td>
                                          <td><?= $b['transaksi']; ?></td>
                                          <td><?= $b['penerima']; ?></td>
                                          <td><?= $b['barang']; ?></td>
                                          <td><?= $b['jenis']; ?></td>
                                          <td><?= $b['quantity']; ?></td>
                                          <td><?= $b['harga']; ?></td>
                                          <td></td>
                                          <td><?= $b['keterangan']; ?></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>