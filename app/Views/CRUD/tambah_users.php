<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Users</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/data_users'); ?>">Data Users</a></li>
      <li class="breadcrumb-item active">Tambah Users</li>
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
          <form action="<?= base_url('owner/Data_Users/simpan_data_users'); ?>" method="POST">
                <div div class="mb-3">
                        <label for="name" class="form-label">Nama Users</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Nama Users">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="phone_no" class="form-label">No Telp</label>
                        <input type="text" id="phone_no" class="form-control" name="phone_no" placeholder="No Telp">
                    </div>
                    <div class="mb-3">
                  <label for="role" class="col-sm-2 col-form-label">Role</label>
                  <div class="col-lg-12">
                    <select name="role"  class="form-select" aria-label="Default select example">
                      <option value="owner">Owner</option>
                      <option value="karyawan">Karyawan</option>
                    </select>
                  </div>
                </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" id="password" class="form-control" name="password" placeholder="Password">
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