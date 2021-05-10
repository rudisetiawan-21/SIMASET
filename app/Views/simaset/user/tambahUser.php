 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah user</li>
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
                    <form class="form-horizontal" action="<?= base_url();?>/User/simpanUser" method="Post">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Id User</label>
                        <div class="col-sm-10">
                          <input type="text"class="form-control" id="inputName" placeholder="" name="id_user" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputName" name="nama_user" placeholder="Nama User" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="username" id="inputEmail" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" id="inputEmail" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Dinas</label>
                        <select class="custom-select rounded-5  col-sm-10" id="exampleSelectRounded0" name="nama_dinas">
                    <option>--- Pilih Kedinasan ---</option>
                    <option value="Dinas Kominfo">Dinas Kominfo</option>
                    <option value="Dinas PUPR">Dinas PUPR</option>
                    <option value="Dinas Pariwisata">Dinas Pariwisata</option>
                    <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                      </select>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Level Akun</label>
                       <select class="custom-select rounded-5 col-sm-10 " id="exampleSelectRounded0" name="level">
                    <option>--- Pilih Level ---</option>
                    <option value="super admin">Super admin</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                      </select>
                      </div>
                      <!-- <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">File input</label>
                      <div class="custom-file col-sm-10">
                        <input type="file" class="custom-file-input" id="exampleInputFile" for="exampleInputFile" name="poto">
                        <label class="custom-file-label col-form-label" for="exampleInputFile" name="poto">
                        </label>
                      </div>
                    </div> -->
                  </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Simpan</button>
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