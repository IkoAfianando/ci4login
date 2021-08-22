<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Tables</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
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
                                    <?php $i = 1; ?>
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
            </div>
      </div>
</div>

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
</script>

<?= $this->endSection(); ?>