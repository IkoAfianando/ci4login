<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bol" id="atasan">Barang Masuk</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Barang Masuk
                              </a>
                        </div>
                  </nav>
                  <br>
                  <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="mydatatable" width="100%" cellspacing="0"
                              responsive>
                              <thead>
                                    <tr>
                                          <th>ID</th>
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
                                          <td><?= $i++; ?></td>
                                          <td>
                                                <?= $b['nomor']; ?>
                                          </td>
                                          <td><?= $b['kode']; ?></td>
                                          <td><?= $b['transaksi']; ?></td>
                                          <td><?= $b['penerima']; ?></td>
                                          <td><?= $b['barang']; ?></td>
                                          <td><?= $b['jenis']; ?></td>
                                          <td><?= $b['quantity']; ?></td>
                                          <td><?= $b['harga']; ?></td>
                                          <td><?= $b['gambar_barang']; ?></td>
                                          <td><?= $b['keterangan']; ?></td>
                                          <td>
                                                <a href="btn btn-primary"></a>
                                          </td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>