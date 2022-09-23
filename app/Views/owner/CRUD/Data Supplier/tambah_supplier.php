<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Supplier</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_supplier'); ?>">Data Supplier</a></li>
      <li class="breadcrumb-item active">Tambah Supplier</li>
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
          <form action="<?= base_url('owner/Data_Supplier/simpan_supplier'); ?>" method="POST">
                    <div div class="mb-3">
                        <label for="nama_supplier" class="form-label">Nama supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" placeholder="Nama Supplier">
                    </div>
                    <div div class="mb-3">
                        <label for="nohp_supplier" class="form-label">No Hp supplier</label>
                        <input type="text" class="form-control" name="nohp_supplier" placeholder="No Hp Supplier">
                    </div>
                    <div div class="mb-3">
                        <label for="alamat_supplier" class="form-label">Alamat supplier</label>
                        <input type="text" class="form-control" name="alamat_supplier" placeholder="Alamat Supplier">
                    </div>
                    <button type="submit"  name="simpan_supplier"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>