<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Aktual</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Peralaman</a></li>
      <li class="breadcrumb-item">Data Aktual</li>
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
          <form action="<?= base_url('owner/Data_aktual/simpan_aktual'); ?>" method="POST">
                <div div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="1" class="form-label">Januari</label>
                        <input type="text" class="form-control" name="1">
                    </div>
                    <div class="mb-3">
                        <label for="2" class="form-label">Februari</label>
                        <input type="text" class="form-control" name="2">
                    </div>
                    <div class="mb-3">
                        <label for="3" class="form-label">Deskripsi Supplier</label>
                        <input type="text" class="form-control" name="3">
                    </div>
                    <button type="submit"  name="simpan_aktual"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>