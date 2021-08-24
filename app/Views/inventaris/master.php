<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Master Barang Inventaris</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Data Master Barang
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
                                          <th>id</th>
                                          <th>Kode Barang</th>
                                          <th>Nama</th>
                                          <th>Jenis Barang</th>
                                          <th>Satuan</th>
                                          <th>Harga</th>
                                          <th>Keterangan</th>
                                          <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                    <?php foreach($master as $m) : ?>
                                    <tr>
                                          <th scope='row'><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $m['kode']; ?></strong>
                                          </td>
                                          <td><?= $m['nama']; ?></td>
                                          <td><?= $m['jenis']; ?></td>
                                          <td><?= $m['satuan']; ?></td>
                                          <td><?= $m['harga']; ?></td>
                                          <td><?= $m['keterangan']; ?></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
                  <?= $pager->links('master', 'pelaporan_pagination'); ?>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>