<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
      <div class="row">
            <div class="col-8">
                  <h2 class="h3 mb-4 text-gray-800">Form Tambah Data User</h2>

                  <form action="/admin/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                              <label for="email" class="col-sm-2 col-form-label">
                                    <h6 class=" text-gray-800">Email</h6>
                              </label>
                              <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" autofocus>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="username" class="col-sm-2 col-form-label ">
                                    <h6 class="text-gray-800">Username</h6>
                              </label>
                              <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="password" class="col-sm-2 col-form-label ">
                                    <h6 class="text-gray-800">Password</h6>
                              </label>
                              <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="confirm_password" class="col-sm-2 col-form-label ">
                                    <h6 class="text-gray-800">Retype Password</h6>
                              </label>
                              <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confirm_password"
                                          name="confirm_password">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="gambar" class="col-sm-2 col-form-label ">
                                    <h6 class="text-gray-800">Gambar</h6>
                              </label>
                              <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gambar" name="gambar">
                              </div>
                        </div>
                        <div class="form-group row">
                              <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>