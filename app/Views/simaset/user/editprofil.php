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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary card-outline p-2">
              <div class="card-header">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?= base_url();?>/User/update" method="Post">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Id User</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" placeholder="Name" name="id_user" value="<?= $profil->id_user; ?>"readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" name="nama_user" placeholder="Name" value="<?= $profil->nama_user; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="username" id="inputEmail" placeholder="Email" value="<?= $profil->username; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Dinas</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_dinas" id="inputName2" placeholder="Name" value="<?= $profil->nama_dinas ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Level Akun</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="level" id="inputSkills" placeholder="Skills" value="<?= $profil->level?>" readonly>
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Foto Profil</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="poto" id="inputSkills" placeholder="Skills">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
    </section>