<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data User
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      <div class="card card-info card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <a href="<?= base_url('user/tambahUser') ?>" class="btn btn-block btn-info">
                    <i class="fas fa-plus"> Tambah Data</i>
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id User</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Nama Dinas</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($barang as $row): ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $row['id_user'];?></td>
                    <td><?= $row['nama_user'];?></td>
                    <td><?= $row['username'];?></td>
                    <td><?= $row['nama_dinas'];?></td>
                    <td><?= $row['level'];?></td>
                    <td>
                      <a href="#" class="btn btn-info btn-circle btn-sm"><i class="far fa-edit"></i></a>
                      <a href="#" onclick="return confirm('Yakin hapus data?') " class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Id User</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Nama Dinas</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
