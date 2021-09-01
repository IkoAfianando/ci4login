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
                                                <tr>
                                                      <td>Tiger</td>
                                                      <td>Nixon</td>
                                                      <td>System Architect</td>
                                                      <td>Edinburgh</td>
                                                      <td>61</td>
                                                      <td>2011/04/25</td>
                                                      <td>$320,800</td>
                                                      <td>5421</td>
                                                      <td>t.nixon@datatables.net</td>
                                                </tr>
                                          </tbody>
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