 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Barang
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('simaset')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('barang')?>">Data Barang</a> </li>
              <li class="breadcrumb-item active">Tambah data barang </li>
              <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert-alert-denger"> <?= session()->getFlashdata('msg')?></div>
                <?php endif;?>

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
                <h2 class="card-title">Tambah Data Barang</h2>
                <div class="card-tools">
                <button onclick="history.back(-1)" class="bg-green btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-undo-alt"></i>
              </button>
            </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
              <form method="POST" action="<?= base_url();?>/Barang/simpan">
                  <div class="row">
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input class="input-group mb-3 form-control" id="exampleInputEmail1" placeholder="Masukkan kode barang" name="id_barang">
                  </div>
                  <div class="col-sm-5">
                  <label for="exampleSelectRounded0">Kategori</code></label>
                  <select class="custom-select rounded-5 input-group mb-3" id="exampleSelectRounded0" name="id_kategori">
                    <option>--- Pilih Kategori ---</option>
                    <?php foreach ($kategori as $row): ?>
                    <option value="<?= $row['id_kategori'];?>"><?= $row['nama_kategori']; ?> 
                    </option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="col-sm-1">
                  <label for="exampleSelectRounded0">+ kategori</label>
                 <a href="<?= base_url('Kategori/tambah')?>" class="btn btn-success btn-circle btn-sm">
                 <i class="fas fa-plus"></i>
                </a>
                
              </button>
                </div>
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input class="form-control input-group mb-3" id="exampleInputEmail1" placeholder="Masukkan nama barang" name="nama_barang">
                  </div>
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">Merk / Type </label>
                    <input  class="form-control input-group mb-3" id="exampleInputEmail1" placeholder="Masukkan merk / type" name="merk">
                  </div>
                <div class="col-sm-6">
                    <label>Spesifikasi</label>
                    <textarea class="form-control input-group mb-3"  placeholder="Enter..." rows="2" name="spek"></textarea>
                  </div>
                <div class="col-sm-6">
                  <label for="exampleInputEmail1">Harga Beli</label>
                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="number" class="form-control" placeholder="Masukkan Harga" name="harga">
                </div>
                </div>
            </div>
                <!-- /.card-body -->
                <br>
                <div>
                  <button type="submit" class="btn btn-success"><i class="far fa-paper-plane">  Simpan</i></button>
                  <button type="submit" class="btn btn-secondary">Batal</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>