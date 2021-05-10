<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?= base_url();?>/dist/img/kominfologo.png" alt="AdminLTELogo" height="150" width="150">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a> --><!-- 
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li>
        <span id="tanggalwaktu" class="nav-link"></span>
        <script>
      var tw = new Date();
      if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
      else (a=tw.getTime());
      tw.setTime(a);
      var tahun= tw.getFullYear ();
      var hari= tw.getDay ();
      var bulan= tw.getMonth ();
      var tanggal= tw.getDate ();
      var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
      var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus      ","September","Oktober","Nopember","Desember");
      document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+      bulanarray[bulan]+" "+tahun+"    " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours()       + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() +":" + ((tw.getSeconds() < 10)? "0" : "") + tw.getSeconds();
</script>     
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">You have no notification</span>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <li class="dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <img src="<?= base_url();?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= session()->get('nama_user'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url();?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?= session()->get('nama_user') ?>
                  <small>Dari kedinasan  <?= session()->get('nama_dinas'); ?> </small>
                  <small>Bergabung sejak  <?= session()->get('created_at'); ?> </small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <table border="0">
                  <tr>
                    <td width="">
                      <div class="pull-left">
                        <a href="<?= base_url('User/tampilProfil')?>" class="btn btn-block btn-outline-primary">Profile</a>
                      </div>
                    </td>
                    <td width="99"></td>
                    <td width="">
                      <div class="pull-right">
                        <a href="<?= base_url();?>/Login/logout" onclick="return confirm('Anda yakin ingin kelaur?') " class="btn btn-block btn-outline-primary">Sign out</a>
                      </div>
                    </td>
                  </tr>
                </table>
              </li>
            </ul>
          </li>
    </ul>
  </nav>