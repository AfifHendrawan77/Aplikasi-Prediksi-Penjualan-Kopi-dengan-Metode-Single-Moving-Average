<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Produk</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_produk'); ?>">Data Produk</a></li>
      <li class="breadcrumb-item active">Edit Produk</li>
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
          <form action="/owner/Data_Produk/update_produk/" method="POST" enctype='multipart/form-data'>
          <?= csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo $produk['id'] ?>">
                 <div div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?php echo $produk['nama_produk'] ?>">
                </div>
                <div div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $produk['harga'] ?>">
                </div>
                <div class="mb-3">
                    <img src="<?=base_url('assets/images/'.$produk['berkas']);?>" width="100">
                </div>
                <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <input type="file" class="form-control" id="berkas" name="berkas">
                </div>
                <div div class="mb-3">
                        <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                        <input type="text" class="form-control" name="deskripsi_produk" value="<?php echo $produk['deskripsi_produk'] ?>">
                </div>
            
            
            <button type="submit" name="update_penjualan" class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>