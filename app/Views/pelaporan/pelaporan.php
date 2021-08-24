<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Pelaporan</h6>
            </div>
            <div class="card-body">
                  <div class="row">
                        <div class="col-4">
                              <form action="" method="post">
                                    <div class="input-group mb-3">
                                          <input type="text" class="form-control"
                                                placeholder="Masukan keyword Pencarian.." name="keyword">
                                          <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit"
                                                      name="submit"><strong>Cari</strong></button>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" responsive>
                              <thead>
                                    <tr>
                                          <th scope="col"><b>No</b></th>
                                          <th scope="col">Nama / SKPD</th>
                                          <th scope="col">No.Telepon</th>
                                          <th scope="col">keterangan</th>
                                          <th scope="col">KOORD</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Priority</th>
                                          <th scope="col">Source Tiket ID</th>
                                          <th scope="col">TGL</th>
                                          <th scope="col">ADD TEAM</th>
                                          <th scope="col">EDIT</th>
                                          <th scope="col">CLOSE TICKET</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                    <?php foreach($pelaporan as $p) : ?>
                                    <tr>
                                          <th scope='row'><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $p['nama']; ?></strong>
                                          </td>
                                          <td><strong><?= $p['telepon']; ?></strong></td>
                                          <td><strong><?= $p['keterangan']; ?></strong></td>
                                          <td><strong><?= $p['koord']; ?></strong></td>
                                          <td><strong><?= $p['status']; ?></strong></td>
                                          <td><strong><?= $p['koord']; ?></strong></td>
                                          <td><strong><?= $p['koord']; ?></strong></td>
                                          <td><strong><?= $p['created_at']; ?></strong></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
                        <?= $pager->links('pelaporan', 'pelaporan_pagination'); ?>
                  </div>
            </div>
      </div>
</div>

<!-- 
<script>
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