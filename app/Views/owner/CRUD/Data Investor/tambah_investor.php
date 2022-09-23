<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Investor</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_investor'); ?>">Data Investor</a></li>
      <li class="breadcrumb-item active">Tambah Investor</li>
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
          <form action="<?= base_url('owner/data_investor/simpan_investor'); ?>" method="POST">
                <div div class="mb-3">
                        <label for="nama_investor" class="form-label">Nama Investor</label>
                        <input type="text" class="form-control" name="nama_investor" placeholder="Nama Investor">
                    </div>
                    <div class="mb-3">
                        <label for="nohp_investor" class="form-label">No Hp Investor</label>
                        <input type="text" class="form-control" name="nohp_investor" placeholder="No Hp Investor">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_investor" class="form-label">Alamat Investor</label>
                        <input type="text" class="form-control" name="alamat_investor" placeholder="Alamat Investor">
                    </div>
                    <button type="submit"  name="simpan_investor"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>