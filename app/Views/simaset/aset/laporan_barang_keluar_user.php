<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang Keluar
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang Keluar </li>
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
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Transaksi</th>
                    <th>Nama User</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($pinjam as $row): ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $row['id_pinjam'];?></td>
                    <td><?= $row['nama_user'];?></td>
                    <td><?= $row['nama_barang'];?></td>
                    <td><?= $row['keterangan'];?></td>
                    <td><?= $row['tgl_pinjam'];?></td>
                    <td><?= $row['tgl_kembali'];?></td>
                    <td><?= $row['status'];?></td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                 <tr>
                    <th>No</th>
                    <th>Id Transaksi</th>
                    <th>Nama User</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
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
    