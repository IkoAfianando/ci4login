<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">User List</h1>

      <div class="row">
            <div class="col-lg-8">
                  <!-- <a href="/admin/create" class="btn btn-primary btn-sm mb-3">Tambah Data User</a>  -->
                  <div class="table-responsive">
                        <table class="table">
                              <thead>
                                    <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Username</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Role</th>
                                          <th scope="col">Action</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($users as $user) : ?>
                                    <tr>
                                          <th scope="row"><?= $i++; ?></th>
                                          <td><?= $user->username; ?></td>
                                          <td><?= $user->email; ?></td>
                                          <td><?= $user->name; ?></td>
                                          <td>
                                                <a href="<?= base_url('admin/'. $user->userid); ?>"
                                                      class="btn btn-sm btn-info">Detail</a>
                                                <!-- <a onclick="return confirm('Yakin akan menghapus?');"
                                                      href="admin/delete/"
                                                      class="btn btn-danger btn-sm">
                                                      <i class="fa fa-trash"></i>
                                                </a> -->
                                          </td>

                                    </tr>
                                    <?php endforeach ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>

</div>

<?= $this->endSection(); ?>