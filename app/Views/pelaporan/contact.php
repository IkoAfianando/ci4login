<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Contact Center</h6>
            </div>
            <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                        <div>
                              <a style="width:100%;" href="javascript:void()" class="btn btn-success btn-sm"
                                    onclick="tambah_pemakaian()">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah PIC
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
                                          <th>SKPD</th>
                                          <th>Nama</th>
                                          <th>Jabatan</th>
                                          <th>No.Telepon</th>
                                          <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                    <?php foreach($contact as $c) : ?>
                                    <tr>
                                          <th scope='row'><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $c['skpd']; ?></strong>
                                          </td>
                                          <td><?= $c['nama']; ?></td>
                                          <td><?= $c['jabatan']; ?></td>
                                          <td><?= $c['telepon']; ?></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                  </div>
                  <?= $pager->links('contact', 'pelaporan_pagination'); ?>
            </div>
      </div>
</div>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
      'use strict';
      window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName(
                  'needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms,
                  function(form) {
                        form.addEventListener('submit', function(
                              event) {
                              if (form
                                    .checkValidity() ===
                                    false) {
                                    event
                                          .preventDefault();
                                    event
                                          .stopPropagation();
                              }
                              form.classList.add(
                                    'was-validated'
                              );
                        }, false);
                  });
      }, false);
})();
</script> -->

<?= $this->endSection(); ?>