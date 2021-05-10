<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('simaset')?>" class="brand-link">
      <img src="<?php echo base_url();?>/dist/img/kominfo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIMASET | KOMINFO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
          <li class="nav-item menu-open">
            <a href="#" class="nav-link disabled">
              <p>Main Navigasi
              </p>
            </a>
          </li>
          <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          </div>
          <li class="nav-item">
            <a href="<?= base_url('simaset')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <?php if (session()->get('level')== 'super admin') {?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang') ?>" class="nav-link">
                  <i class="nav-icon fas fa-archive"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user/listUser') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Data User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-grip-lines"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang/tambah') ?>" class="nav-link">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('BarangKeluar/tambah') ?>" class="nav-link">
                  <i class="nav-icon fas fa-minus"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>Stok Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Maintenance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang/list_barang_masuk') ?>" class="nav-link">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('BarangKeluar') ?>" class="nav-link">
                  <i class="nav-icon fas fa-minus"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          </div>
        <?php } ?>

        <?php if (session()->get('level')== 'admin') {?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang/list_barang_user') ?>" class="nav-link">
                  <i class="nav-icon fas fa-archive"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user/list_user_admin') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Data User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang/list_barang_masuk') ?>" class="nav-link">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('BarangKeluar/laporan_admin') ?>" class="nav-link">
                  <i class="nav-icon fas fa-minus"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <?php if (session()->get('level')== 'user') {?>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Barang/list_barang_user') ?>" class="nav-link">
                  <i class="nav-icon fas fa-archive"></i>
                  <p>Data Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Maintenance
              </p>
            </a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a href="<?= base_url();?>/Login/logout" class="nav-link" onclick="return confirm('Anda yakin ingin kelaur?') " >
              <i class="nav-icon fas fa-sign-out-alt" ></i>
              <p>
                Log out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    <!-- Main content -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->