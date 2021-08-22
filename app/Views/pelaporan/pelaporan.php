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
                  <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" responsive>
                              <thead>
                                    <tr>
                                          <th scope="col"><b>No</b></th>
                                          <th scope="col">Nama / SKPD</th>
                                          <th scope="col">No.Telepon</th>
                                          <th scope="col">keterangan</th>
                                          <th scope="col">KOORD</th>
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
                                          <th scope='row'><?= $i++; ?></th>
                                          <td>
                                                <strong><?= $p['nama']; ?></strong>
                                          </td>
                                          <td><?= $p['telepon']; ?></td>
                                          <td><?= $p['keterangan']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['status']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['koord']; ?></td>
                                          <td><?= $p['created_at']; ?></td>

                                    </tr>

                                    <?php endForeach; ?>
                              </tbody>
                        </table>
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