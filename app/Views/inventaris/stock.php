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
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Stok
                              </a>
                        </div>
                        <form action="" method="post" class="form-inline">
                              <div class="col-12">
                                    <div class="input-group mb-3">
                                          <input type="text" class="form-control" placeholder="Input Keyword"
                                                name="keyword">
                                          <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit"
                                                      name="submit"><strong><i class="fa fa-search"
                                                                  aria-hidden="true"></i></strong></button>
                                          </div>
                                    </div>
                              </div>
                        </form>
                  </nav>
                  <br>
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
                                    <?php $i = 1 + (6 *($currentPage - 1)); ?>
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
                  <?= $pager->links('stok', 'pelaporan_pagination'); ?>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>