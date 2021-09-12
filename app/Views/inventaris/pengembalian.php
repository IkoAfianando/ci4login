<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" id="atasan">Pengembalian Barang</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Pengembalian
                              </a>
                        </div>
                  </nav>
                  <br>
                  <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="mydatatable" width="100%" cellspacing="0">
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>Nama Barang</th>
                                          <th>id Barang Keluar</th>
                                          <th>Jumlah</th>
                                          <th>Keterangan</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($pengembalian as $p) : ?>
                                    <tr>
                                          <td scope='row'><?= $i++; ?></td>
                                          <td>
                                                <?= $p['barang']; ?>
                                          </td>
                                          <td><?= $p['id_barang']; ?></td>
                                          <td><?= $p['jumlah']; ?></td>
                                          <td><?= $p['keterangan']; ?></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>