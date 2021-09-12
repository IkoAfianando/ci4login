<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" id="atasan">Contact Center</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah PIC
                              </a>
                        </div>
                  </nav>
                  <br>
                  <div class="box-body table-responsive">
                        <table class="table table-striped table-bordered dt-responsive nowrap" width="100%"
                              cellspacing="0" id="mydatatable" responsive>
                              <thead>
                                    <tr>
                                          <th>No</th>
                                          <th>SKPD</th>
                                          <th>Nama</th>
                                          <th>Jabatan</th>
                                          <th>No.Telepon</th>
                                          <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($contact as $c) : ?>
                                    <tr>
                                          <td><?= $i++; ?></td>
                                          <td>
                                                <?= $c['skpd']; ?>
                                          </td>
                                          <td><?= $c['nama']; ?></td>
                                          <td><?= $c['jabatan']; ?></td>
                                          <td><?= $c['telepon']; ?></td>
                                          <td>
                                                <a href="" class="btn btn-primary btn-sm">
                                                      <i class="fa fa-eye" class="d-inline"></i>
                                                </a>
                                                <a onclick="return confirm('Yakin akan menghapus?');"
                                                      href="/pelaporan/contact/delete/<?= $c['id']; ?>"
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