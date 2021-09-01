<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
            <div class="x_title">
                  <h2>Responsive example<small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                  </ul>
                  <div class="clearfix"></div>
            </div>
            <div class="x_content">
                  <div class="row">
                        <div class="col-sm-12">
                              <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                          Responsive is an extension for DataTables that resolves that problem by
                                          optimising the table's layout for different screen sizes through the dynamic
                                          insertion and removal of columns from the table.
                                    </p>

                                    <table id="datatable-responsive"
                                          class="table table-striped table-bordered dt-responsive nowrap"
                                          cellspacing="0" width="100%">
                                          <thead>
                                                <tr>
                                                      <th>First name</th>
                                                      <th>Last name</th>
                                                      <th>Position</th>
                                                      <th>Office</th>
                                                      <th>Age</th>
                                                      <th>Start date</th>
                                                      <th>Salary</th>
                                                      <th>Extn.</th>
                                                      <th>E-mail</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                                <?php foreach($audit as $a): ?>
                                                <tr>
                                                      <th scope='row'><?= $i++; ?></th>
                                                      <td>
                                                            <strong><?= $a['skpd']; ?></strong>
                                                      </td>
                                                      <td><?= $a['telepon']; ?></td>
                                                      <td><?= $a['tanggal']; ?></td>
                                                      <td><?= $a['auditor']; ?></td>
                                                </tr>

                                                <?php endForeach; ?>
                                          </tbody>
                                          <!-- <thead>
                                                <tr>
                                                      <th>No</th>
                                                      <th>Nama / SKPD</th>
                                                      <th>No.Telepon/PIC</th>
                                                      <th>TGL AUDIT</th>
                                                      <th>AUDITOR</th>
                                                      <th>EDIT</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                                <?php foreach($audit as $a): ?>
                                                <tr>
                                                      <th scope='row'><?= $i++; ?></th>
                                                      <td>
                                                            <strong><?= $a['skpd']; ?></strong>
                                                      </td>
                                                      <td><?= $a['telepon']; ?></td>
                                                      <td><?= $a['tanggal']; ?></td>
                                                      <td><?= $a['auditor']; ?></td>
                                                </tr>

                                                <?php endForeach; ?>
                                          </tbody> -->

                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>
</div>
</div>
<!-- /page content -->


<?= $this->endSection(); ?>