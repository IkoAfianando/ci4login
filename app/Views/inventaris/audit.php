<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" id="atasan">Audit Infrastruktur</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah Stok
                              </a>
                        </div>
                  </nav>
                  <br>
                  <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="mydatatable" width="100%" cellspacing="0">
                              <thead>
                                    <tr>
                                          <th>ID</th>
                                          <th>SKPD</th>
                                          <th>Telepon</th>
                                          <th>Tanggal</th>
                                          <th>Auditor</th>
                                          <th>Detail Stok</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($audit as $a) : ?>
                                    <tr>
                                          <td><?= $i++; ?></td>
                                          <td>
                                                <?= $a['skpd']; ?>
                                          </td>
                                          <td><?= $a['telepon']; ?></td>
                                          <td><?= $a['tanggal']; ?></td>
                                          <td><?= $a['auditor']; ?></td>
                                          <td>
                                                <a href="" class="btn btn-primary">
                                                      <i class="fa fa-edit"></i>
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