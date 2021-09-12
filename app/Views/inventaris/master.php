<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" id="atasan">Master Barang Inventaris</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Data Master Barang
                              </a>
                        </div>
                  </nav>
                  <br>
                  <div class="table-responsive">
                        <table class="table table-striped table-bordered dt-responsive nowrap" width="100%"
                              id="mydatatable" width="100%" cellspacing="0">
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
                                    <?php $i = 1; ?>
                                    <?php foreach($master as $m) : ?>
                                    <tr>
                                          <td><?= $i++; ?></td>
                                          <td>
                                                <?= $m['kode']; ?>
                                          </td>
                                          <td><?= $m['nama']; ?></td>
                                          <td><?= $m['jenis']; ?></td>
                                          <td><?= $m['satuan']; ?></td>
                                          <td><?= $m['harga']; ?></td>
                                          <td><?= $m['keterangan']; ?></td>
                                          <td>
                                                <a href="" class="btn btn-primary btn-sm">
                                                      <i class="fa fa-eye" class="d-inline"></i>
                                                </a>

                                                <a onclick="return confirm('Yakin akan menghapus?');" href=""
                                                      class=" btn btn-danger btn-sm" class="d-inline">
                                                      <i class="fa fa-trash"></i>
                                                </a>
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