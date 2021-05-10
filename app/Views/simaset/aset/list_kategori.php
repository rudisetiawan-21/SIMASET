<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kategori
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori </li>
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
              <!-- <div class="card-header">
                <h3 class="card-title">
                  <a href="#" class="btn btn-block btn-info">
                    <i class="fas fa-plus"> Tambah Data</i>
                  </a>
                </h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($kategori as $row): ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $row['id_kategori'];?></td>
                    <td><?= $row['nama_kategori'];?></td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
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
