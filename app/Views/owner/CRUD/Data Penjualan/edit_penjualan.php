<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Penjualan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Peralaman</a></li>
      <li class="breadcrumb-item">Edit Penjualan</li>
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
          <form action="/owner/data_penjualan/update_penjualan/<?= $penjualan['id']; ?>" method="POST" >
          <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" value="<?php echo $penjualan['nama_pembeli']; ?>" autofocus>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $penjualan['nama_produk'] ?>" autofocus>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $penjualan['harga'] ?>" autofocus>
            </div><div class="mb-3">
                <label for="Kuantiti" class="form-label">Kuantiti</label>
                <input type="text" class="form-control" name="Kuantiti" value="<?php echo $penjualan['Kuantiti'] ?>" autofocus>
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