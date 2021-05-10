<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang </li>
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
                    <th>Kode Barang</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($barang as $row): ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $row['id_barang'];?></td>
                    <td><?= $row['nama_kategori'];?></td>
                    <td><?= $row['nama_barang'];?></td>
                    <td><?= $row['merk'];?></td>
                    <td><?= $row['spek'];?></td>
                    <td>Rp. <?= $row['harga'];?></td>
                    <td>
                      <a href="<?php base_url();?>/Barang/edit/<?= $row['id_barang'];?>" class="btn btn-info btn-circle btn-sm"><i class="far fa-edit"></i></a>
                      <a href="<?php base_url();?>/barang/delete/<?= $row['id_barang'];?>" onclick="return confirm('Yakin hapus data?') " class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Spesifikasi</th>
                    <th>Harga</th>
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
