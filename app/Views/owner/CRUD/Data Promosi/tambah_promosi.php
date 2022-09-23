<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Promosi</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_promosi'); ?>">Data Promosi</a></li>
      <li class="breadcrumb-item active">Tambah Promosi</li>
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
          <form action="<?= base_url('owner/Data_Promosi/simpan_promosi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <input type="file" class="form-control" id="berkas" name="berkas">
                    </div>
                    
                    <button type="submit"  name="simpan_promosi"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>