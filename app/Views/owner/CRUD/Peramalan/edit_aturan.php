<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Peramalan</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_peramalan'); ?>">Data Peramalan</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/Aturan_Peramalan'); ?>">Aturan Peramalan</a></li>
      <li class="breadcrumb-item active">Edit Aturan Peramaln</li>
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
          <form action="/owner/data_peramalan/update_aturan_peramalan/<?= $aturan['id']; ?>" method="POST" >
          <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?php echo $aturan['nama_barang'] ?>" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_peramalan" class="form-label">Tahun</label>
                        <input type="text" class="form-control" name="tahun_peramalan" value="<?php echo $aturan['tahun_peramalan'] ?>" autofocus>
                    </div>
                    <button type="submit"class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>