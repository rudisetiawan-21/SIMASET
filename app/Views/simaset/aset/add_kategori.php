 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Kategori
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('simaset')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('barang')?>">Data Kategori</a> </li>
              <li class="breadcrumb-item active">Tambah data Kategori</li>
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
              <form method="POST" action="<?= base_url();?>/Kategori/simpan">
                  <div class="row">
                    <div class="col-sm-6">
                    <label for="exampleInputEmail1">Id kategori</label>
                    <input class="input-group mb-3 form-control" id="exampleInputEmail1" placeholder="Masukkan kode barang" name="id_kategori">
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama kategori</label>
                    <input class="input-group mb-3 form-control" id="exampleInputEmail1" placeholder="Masukkan kode barang" name="nama_kategori">
                  </div>
                  <div>
                  <button type="submit" class="btn btn-success"><i class="far fa-paper-plane">  Simpan</i></button>
                  <button type="submit" class="btn btn-secondary">Batal</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>