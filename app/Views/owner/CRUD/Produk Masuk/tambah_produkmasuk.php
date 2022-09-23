<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Produk Masuk</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_supplier'); ?>">Data Supplier</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/produk_masuk'); ?>">Produk Masuk</a></li>
      <li class="breadcrumb-item active">Tambah Produk Masuk</li>
      </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <p></p>

          <div class="row">
            <div class="col-md-12">
              <?php 
                  if(session()->get('err')){
                    echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Data Gagal Ditambahkan!</h4>
                    <p class='mb-0'>". session()->get('err') ."</p>
                  </div>";
                  }
              ?>
            </div>
          </div>

          <!-- Form -->
          <form action="<?= base_url('owner/Produk_Masuk/simpan_produk_masuk'); ?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 form_per">
                        <label for="id_produk" class="form-label">Pilih Produk yang akan ditambahkan</label>
                        <select id="inputState" class="form-select" id="id_produk" name="id_produk">
                          <option selected>Pilih Produk</option>
                          <?php
                              $no = 1;
                              foreach($data['produk'] as $row) :?>
                                        <option value=<?php echo $row['id_produk']; ?>><?php echo $row['nama_produk']; ?></option>
                                        <?php
                            endforeach;
                          ?>
                        </select>
                    </div>   
                      
                    <div class="mb-3 form_per">
                        <label for="nama_supplier" class="form-label">Nama Supplier</label>
                        <select class="form-select" id="id_supplier" name="id_supplier">
                          <option selected>Pilih Nama Supplier</option>
                          <?php foreach($data['supplier'] as $row) :?>
                          <option value="<?php echo $row['id_supplier']; ?>"><?php echo $row['nama_supplier']; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>                   
                    <div class="mb-3">
                        <label for="stok_masuk" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="stok_masuk" placeholder="Jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="penerima" class="form-label">Penerima</label>
                        <input type="text" class="form-control" name="penerima" placeholder="Penerima">
                    </div>
              
                    <button type="submit"  name="simpan_produk"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>