<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" id="atasan">Pelaporan</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; TAMBAH PENGADUAN
                              </a>
                        </div>

                  </nav>
                  <br>
                  <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="mydatatable" width="100%" cellspacing="0"
                              responsive>
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>Nama / SKPD</th>
                                          <th>No.Telepon</th>
                                          <th>keterangan</th>
                                          <th>KOORD</th>
                                          <th>Status</th>
                                          <th>Priority</th>
                                          <th>Source Tiket ID</th>
                                          <th>TGL</th>
                                          <th>ADD TEAM</th>
                                          <th>EDIT</th>
                                          <th>CLOSE TICKET</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($pelaporan as $p) : ?>
                                    <tr>
                                          <td><?= $i++; ?></td>
                                          <td>
                                                <?= $p['nama']; ?>
                                          </td>
                                          <td><?= $p['telepon']; ?></td>
                                          <td><?= $p['keterangan']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['status']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['created_at']; ?></td>
                                          <td>
                                                <a href="#" class="btn btn-primary btn-sm">
                                                      <i class="fas fa-plus"></i>
                                                </a>
                                          </td>
                                          <td>
                                                <a href="#" class="btn btn-info btn-sm">
                                                      <i class="far fa-edit"></i>
                                                </a>
                                          </td>
                                          <td>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                      <i class="fas fa-check-square"></i>
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