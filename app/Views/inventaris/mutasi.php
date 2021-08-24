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
                                    role="tab" aria-controls="pemakaian" aria-selected="true">Inventaris Barang
                                    Keluar</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" id="dokumen-tab" data-toggle="tab" href="#dokumen" role="tab"
                                    aria-controls="dokumen" aria-selected="false">Berita Acara / Dokumen
                                    Report</a>
                        </li>
                  </ul>
            </div>
            <hr>
            <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pemakaian" role="tabpanel" aria-labelledby="pemakaian-tab">
                        <div>
                              <div class="item form-group">
                                    <div class="col-md-3 col-sm-3 ">
                                          <label> Pilih Pengeluaran Barang </label>
                                          <br>
                                          <div>
                                                <SELECT name="jenis" id="jenis"
                                                      class="form-control form-control-sm select2" onchange="">
                                                      <OPTION value='all' selected>Semua </OPTION>
                                                      <OPTION value='1'>Terpakai </OPTION>
                                                      <OPTION value='2'>Terpasang </OPTION>
                                                      <OPTION value='3'>Terpinjam</OPTION>
                                                </select>
                                          </div>
                                    </div>
                                    <br>
                                    <div>
                                          <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                                onclick="tambah_pemakaian()">
                                                <i class="fa fa-plus"></i>&nbsp; Tambah Data Mutasi
                                                Barang
                                          </a>
                                    </div>
                              </div>
                              <div class="card-body">
                                    <div class="table-responsive">
                                          <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                      <tr>
                                                            <th>No</th>
                                                            <th>Kode Transaksi</th>
                                                            <th>ID Peminjaman</th>
                                                            <th>Nama Barang</th>
                                                            <th>Nomor Pelaporan</th>
                                                            <th>Jumlah</th>
                                                            <th>Lokasi</th>
                                                            <th>Penanggung Jawab</th>
                                                            <th>Penerima</th>
                                                            <th>Status</th>
                                                            <th>Keterangan</th>
                                                            <th>Mutasi</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php $i = 1; ?>
                                                      <?php foreach($mutasi as $m) : ?>
                                                      <tr>
                                                            <th scope='row'><?= $i++; ?></th>
                                                            <td>
                                                                  <strong><?= $m['kode']; ?></strong>
                                                            </td>
                                                            <td><?= $m['id_peminjaman']; ?></td>
                                                            <td><?= $m['nama']; ?></td>
                                                            <td><?= $m['nomor']; ?></td>
                                                            <td><?= $m['jumlah']; ?></td>
                                                            <td><?= $m['lokasi']; ?></td>
                                                            <td><?= $m['penanggung_jawab']; ?></td>
                                                            <td><?= $m['penerima']; ?></td>
                                                            <td><?= $m['status']; ?></td>
                                                            <td><?= $m['keterangan']; ?></td>

                                                      </tr>

                                                      <?php endForeach; ?>
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                        <h2>Dokumen Berita Acara Barang Keluar</h2>
                  </div>
            </div>
      </div>
</div>
<?= $this->endSection(); ?>