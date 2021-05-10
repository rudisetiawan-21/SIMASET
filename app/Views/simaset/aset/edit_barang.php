<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Barang
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h2 class="card-title">Edit Data Barang</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
              <form method="POST" action="<?= base_url();?>/Barang/update">
                  <div class="row">
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input class="input-group mb-3 form-control"  id="exampleInputEmail1" value="<?= $barang->id_barang; ?>" name="id_barang" readonly>
                  </div>
                  <div class="col-sm-6">
                  <label for="exampleSelectRounded0">Kategori</code></label>
                  <select class="custom-select rounded-5 input-group mb-3" id="exampleSelectRounded0" name="id_kategori">
                    <?php foreach ($kategori as $row): ?>
                    <option value="<?= $row['id_kategori'];?>" 
                      <?php if ($row['id_kategori']==$barang->id_kategori) { ?>
                       selected
                        <?php } ?>><?= $row['nama_kategori']; ?> 
                    </option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input class="form-control input-group mb-3" id="exampleInputEmail1" value="<?= $barang->nama_barang; ?>" name="nama_barang">
                  </div>
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">Merk / Type </label>
                    <input  class="form-control input-group mb-3" id="exampleInputEmail1" value="<?= $barang->merk; ?>" name="merk">
                  </div>
                <div class="col-sm-6">
                    <label>Spesifikasi</label>
                    <textarea class="form-control input-group mb-3"  placeholder="Enter..." rows="2" name="spek"><?= $barang->spek ?></textarea>
                  </div>
                <div class="col-sm-6">
                  <label for="exampleInputEmail1">Harga Beli</label>
                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" class="form-control" value="<?= $barang->harga; ?>" name="harga">
                </div>
                </div>
            </div>
                <!-- /.card-body -->
                <br>
                <div>
                  <button type="submit" class="btn btn-success"><span><i class="far fa-paper-plane"> Simpan</i></span></button>
                  <button type="submit" class="btn btn-secondary">Batal</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>