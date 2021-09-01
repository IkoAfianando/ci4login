<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                  <i class="fas fa-heading"></i>
            </div>
            <div class="sidebar-brand-text mx-1">ELPDESK</div>
      </a>

      <br>

      <?php if(in_groups('admin')) :   ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <?php endif; ?>

      <!-- Heading -->
      <div class="sidebar-heading">
            General
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa fa-edit"></i>
                  <span>Pelaporan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('pelaporan/pelaporan'); ?>">Pelaporan Item </a>
                        <a class="collapse-item" href="<?= base_url('pelaporan/contact'); ?>">Contact Center</a>
                        <a class="collapse-item" href="<?= base_url('pelaporan/eskalasi'); ?>">Eskalasi</a>
                  </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                  aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="far fa-window-maximize"></i>
                  <span>Inventaris Aset</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                  data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('inventaris/master'); ?>">Master Barang</a>
                        <a class="collapse-item" href="<?= base_url('inventaris/barang'); ?>">Barang Masuk</a>
                        <a class="collapse-item" href="<?= base_url('inventaris/mutasi'); ?>">Mutasi</a>
                        <a class="collapse-item" href="<?= base_url('inventaris/pengembalian'); ?>">Pengembalian</a>
                        <a class="collapse-item" href="<?= base_url('inventaris/stock'); ?>">Data Stok Barang</a>
                        <a class="collapse-item" href="<?= base_url('inventaris/audit'); ?>">Audit Infrastruktur</a>
                  </div>
            </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
            Activity
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSppd" aria-expanded="true"
                  aria-controls="collapseSppd">
                  <i class="fas fa-chart-line"></i>
                  <span>SPPD</span>
            </a>
            <div id="collapseSppd" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('sppd/dinas'); ?>">Dinas Dalam & Luar</a>
                        <a class="collapse-item" href="<?= base_url('sppd/report'); ?>">Report & Pendataan <br>by
                              Personil</a>
                  </div>
            </div>
      </li>

      <!-- Nav Item - Managemen Aplikasi Collapse Menu -->
      <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseManagemen" aria-expanded="true"
                  aria-controls="collapseManagemen">
                  <i class="fas fa-tasks"></i>
                  <span>Managemen Aplikasi</span>
            </a>
            <div id="collapseManagemen" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('management/aplikasi'); ?>">List Aplikasi</a>
                        <a class="collapse-item" href="<?= base_url('management/chart'); ?>">Ganti Chart</a>
                  </div>
            </div>
      </li>

      <!-- Nav Item - Aktivitas Collapse Menu -->
      <!-- <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseAktivitas" aria-expanded="true"
                  aria-controls="collapseAktivitas">
                  <i class="fas fa-sliders-h"></i>
                  <span>Aktivitas</span>
            </a>
            <div id="collapseAktivitas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('aktivitas/setting'); ?>">Setting</a>
                        <a class="collapse-item" href="<?= base_url('aktivitas/aktivitas'); ?>">List Aktivitas</a>
                  </div>
            </div>
      </li> -->

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
            Profile
      </div>

      <!-- Nav Item - My Profile -->
      <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user') ?>">
                  <i class="fas fa-user"></i>
                  <span>My Profile</span></a>
      </li>

      <!-- Nav Item - Edit Profile -->
      <li class="nav-item">
            <a class="nav-link" href="tables.html">
                  <i class="fas fa-user-edit"></i>
                  <span>Edit Profile</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Logout -->
      <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

</ul>