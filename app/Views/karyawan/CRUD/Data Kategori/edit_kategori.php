<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
<h1>Edit Kategori</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_kategori'); ?>">Data Kategori</a></li>
      <li class="breadcrumb-item active">Edit Kategori</li>
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
          <form action="/karyawan/Data_Kategori/update_kategori" method="POST" enctype='multipart/form-data'>
          <?= csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo $berkas['id'] ?>">
                 <div div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" value="<?php echo $berkas['nama_kategori'] ?>">
                </div>
                <div class="mb-3">
                    <img src="<?=base_url('assets/kategori/'.$berkas['berkas']);?>" width="100">
                </div>
                <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <input type="file" class="form-control" id="berkas" name="berkas">
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