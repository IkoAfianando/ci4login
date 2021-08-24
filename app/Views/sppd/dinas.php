<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="col-md-12 col-sm-12 ">
                  <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                              <a class="nav-link active" id="pemakaian-tab" data-toggle="tab" href="#pemakaian"
                                    role="tab" aria-controls="pemakaian" aria-selected="true">SPPD</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" id="dokumen-tab" data-toggle="tab" href="#dokumen" role="tab"
                                    aria-controls="dokumen" aria-selected="false">Nota Dinas</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" id="surat-tab" data-toggle="tab" href="#surat" role="tab"
                                    aria-controls="surat" aria-selected="false">Surat Tugas</a>
                        </li>
                  </ul>
            </div>
            <hr>
            <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pemakaian" role="tabpanel" aria-labelledby="pemakaian-tab">
                        <div>
                              <div class="item form-group">
                                    <div class="col-md-3 col-sm-3 ">
                                          <label> SPPD </label>
                                          <br>
                                    </div>
                                    <br>
                                    <div>
                                          <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                                onclick="tambah_pemakaian()">
                                                <i class="fa fa-plus"></i>&nbsp; Tambah SPPD
                                          </a>
                                    </div>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                      <tr>
                                                            <th>Tanggal</th>
                                                            <th>Tujuan</th>
                                                            <th>Bidang</th>
                                                            <th>Anggota</th>
                                                            <th>Aksi</th>
                                                            <th>Nota Dinas</th>
                                                            <th>Surat Tugas</th>
                                                            <th>Rincian Anggaran</th>
                                                            <th>LPD</th>
                                                            <th>SPD</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php $i = 1; ?>
                                                      <?php foreach($dinas as $d) : ?>
                                                      <tr>
                                                            <!-- <th scope='row'><?= $i++; ?></th> -->
                                                            <td>
                                                                  <strong><?= $d['tanggal_sppd']; ?></strong>
                                                            </td>
                                                            <td><?= $d['tujuan']; ?></td>
                                                            <td><?= $d['bidang']; ?></td>
                                                            <td><?= $d['anggota']; ?></td>
                                                      </tr>

                                                      <?php endForeach; ?>
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                        <div>
                              <div class="item form-group">
                                    <div class="col-md-3 col-sm-3 ">
                                          <label>Nota Dinas</label>
                                          <br>
                                    </div>
                                    <div>
                                          <ul class="nav justify-content-center">
                                                <a style="width:80%; " href="javascript:void()"
                                                      class="btn btn-success btn-sm" onclick="tambah_pemakaian()">
                                                      <i class="fa fa-plus"></i>&nbsp; Tambah Data Nota Dinas
                                                </a>
                                          </ul>
                                    </div>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                      <tr>
                                                            <th>Tanggal</th>
                                                            <th>No Nota Dinas</th>
                                                            <th>keterangan</th>
                                                            <th>Aksi</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php $i = 1; ?>
                                                      <?php foreach($dinas as $d) : ?>
                                                      <tr>
                                                            <!-- <th scope='row'><?= $i++; ?></th> -->
                                                            <td>
                                                                  <strong><?= $d['tanggal_dinas']; ?></strong>
                                                            </td>
                                                            <td><?= $d['nota_dinas']; ?></td>
                                                            <td><?= $d['keterangan']; ?></td>
                                                      </tr>

                                                      <?php endForeach; ?>
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="surat" role="tabpanel" aria-labelledby="surat-tab">
                        <div>
                              <div class="item form-group">
                                    <div class="col-md-3 col-sm-3 ">
                                          <label>Surat Tugas</label>
                                          <br>
                                    </div>
                                    <div>
                                          <ul class="nav justify-content-center">
                                                <a style="width:80%;" href="javascript:void()"
                                                      class="btn btn-success btn-sm" onclick="tambah_pemakaian()">
                                                      <i class="fa fa-plus"></i>&nbsp; Tambah Data Surat Tugas
                                                </a>
                                          </ul>
                                    </div>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                      <tr>
                                                            <th>Tanggal</th>
                                                            <th>No Surat Tugas</th>
                                                            <th>Dasar Surat Tugas</th>
                                                            <th>Aksi</th>
                                                      </tr>
                                                </thead>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<?= $this->endSection(); ?>