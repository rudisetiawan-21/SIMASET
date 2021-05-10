 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url();?>/dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= session()->get('nama_user'); ?></h3>

                <p class="text-muted text-center"><?= session()->get('level'); ?></p>

                <a href="<?= base_url();?>/user/editProfil/<?= $profil->id_user ?>" class="btn btn-primary btn-block"><b>Ubah profil</b></a>
              </div>
              <!-- /.card-body -->
            </div>