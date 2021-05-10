 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Barang Keluar
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('simaset')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('barang')?>">Data Barang Keluar</a> </li>
              <li class="breadcrumb-item active">Tambah data barang Keluar </li>
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
                <h2 class="card-title">Tambah Data Barang Keluar</h2>
                <div class="card-tools">
                <button onclick="history.back(-1)" class="bg-green btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-undo-alt"></i>
              </button>
            </div>
              </div>
                <div class="card-body">
              <form method="POST" action="<?= base_url();?>/BarangKeluar/simpan">
                  <div class="row">
                    <input type="hidden" class="form-control input-group mb-3" id="exampleInputEmail1"  name="id_pinjam" readonly="">
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama Penerima</label>
                    <select class="custom-select rounded-5 input-group mb-3" id="exampleSelectRounded0" name="id_user">
                    <option>--- Pilih Penerima ---</option>
                    <?php foreach ($user as $row): ?>
                    <option value="<?= $row['id_user'];?>"><?= $row['nama_user']; ?> 
                    </option>
                    <?php endforeach;?>
                  </select>
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <select class="custom-select rounded-5 input-group mb-3" id="exampleSelectRounded0" name="id_barang">
                    <option>--- Pilih Barang ---</option>
                    <?php foreach ($barang as $row): ?>
                    <option value="<?= $row['id_barang'];?>"><?= $row['nama_barang']; ?> 
                    </option>
                    <?php endforeach;?>
                  </select>
                  </div>
                <!-- <div class="col-sm-3">
                    <label for="exampleInputEmail1">Merk Barang</label>
                    <input class="form-control input-group mb-3" id="exampleInputEmail1" placeholder="Masukkan merk barang" name="merk">
                  </div> -->
                
                <div class="col-sm-6">
                    <label>Keterangan</label>
                    <textarea class="form-control input-group mb-3"  placeholder="Enter..." rows="2" name="keterangan"></textarea>
                  </div>
                  <div class="col-sm-6">
                    <label for="exampleInputEmail1">Tgl Pinjam</label>
                    <input type="date" class="form-control input-group mb-3" id="exampleInputEmail1" placeholder="Masukkan merk / type" name="tgl_pinjam">
                  </div>
                  
                <!-- <div class="col-sm-6">
                  <label for="exampleInputEmail1">Harga Beli</label>
                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="number" class="form-control" placeholder="Masukkan Harga" name="harga">
                </div>
                </div> -->
            </div>
              
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
  